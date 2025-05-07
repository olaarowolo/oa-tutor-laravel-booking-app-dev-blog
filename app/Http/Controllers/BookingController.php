<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmationMail;
use App\Mail\BookingNotificationMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    // Show booking form for KS2 Basic Plan
    public function showForm()
    {
        return view('booking.form');
    }

    // Handle booking submission
    public function submitBooking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'booking_date' => 'required|date|after_or_equal:today',
            'booking_time_slot' => 'required|string|in:4-5pm,5-6pm',
            'plan' => 'required|string|in:KS1 Basic Plan,KS1 Standard Plan,KS1 Premium Plan,KS2 Basic Plan,KS2 Standard Plan,KS2 Premium Plan,KS3 Basic Plan,KS3 Standard Plan,KS3 Premium Plan',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validate booking date is Tuesday or Wednesday
        $bookingDate = date('N', strtotime($request->booking_date)); // 2=Tuesday, 3=Wednesday
        if (!in_array($bookingDate, [2, 3])) {
            return redirect()->back()->withErrors(['booking_date' => 'Booking date must be Tuesday or Wednesday'])->withInput();
        }

        // Check if time slot is available (max 5 bookings allowed)
        $bookingCount = Booking::where('booking_date', $request->booking_date)
            ->where('booking_time_slot', $request->booking_time_slot)
            ->count();

        if ($bookingCount >= 5) {
            return redirect()->back()->withErrors(['booking_time_slot' => 'This time slot is already fully booked'])->withInput();
        }

        // Create booking with payment_status pending
        $booking = Booking::create([
            'client_name' => $request->client_name,
            'client_email' => $request->client_email,
            'plan' => $request->plan,
            'booking_date' => $request->booking_date,
            'booking_time_slot' => $request->booking_time_slot,
            'payment_status' => 'pending',
        ]);

        // Dynamic service details based on plan
        $serviceDetails = $this->getServiceDetails($booking->plan);

        // Send booking confirmation email with payment pending
        Mail::to($booking->client_email)->send(new BookingConfirmationMail($booking, 'pending', $serviceDetails));

        // Send notification email to admin
        Mail::to('bookings@oatutors.co.uk')->send(new BookingNotificationMail($booking, $serviceDetails));

        // Instead of redirecting to PayPal, show booking success confirmation
        $serviceDetails = $this->getServiceDetails($booking->plan);
        return view('booking.success', ['booking' => $booking, 'serviceDetails' => $serviceDetails]);
    }

    // Remove redirectToPaypal method as PayPal is removed

    // Modify paymentSuccess method to handle generic payment success or remove if unused
    public function paymentSuccess(Request $request, Booking $booking)
    {
        // Dynamic service details based on plan
        $serviceDetails = $this->getServiceDetails($booking->plan);

        // Update booking payment status to paid
        $booking->payment_status = 'paid';
        $booking->save();

        // Send payment success confirmation email
        Mail::to($booking->client_email)->send(new BookingConfirmationMail($booking, 'paid', $serviceDetails));

        return view('booking.success', ['booking' => $booking, 'serviceDetails' => $serviceDetails]);
    }

    private function getServiceDetails(string $plan): array
    {
        $plans = [
            // Key Stage 1 (KS1) Plans
            'KS1 Basic Plan' => [
                'name' => 'KS1 Basic Plan',
                'description' => 'Early learning essentials for foundational growth.',
                'price' => '£100 /month',
                'features' => [
                    '2 Sessions per Week',
                    'Group Classes (Max 5 Students)',
                    'Basic Learning Materials',
                    'Email Support Only',
                    'No 1:1 Tutoring',
                ],
            ],
            'KS1 Standard Plan' => [
                'name' => 'KS1 Standard Plan',
                'description' => 'Enhanced learning resources with extra support.',
                'price' => '£140 /month',
                'features' => [
                    '3 Sessions per Week',
                    'Small Group Classes (Max 3 Students)',
                    'Enhanced Learning Materials',
                    'Email & Chat Support',
                    'Homework Assistance',
                ],
            ],
            'KS1 Premium Plan' => [
                'name' => 'KS1 Premium Plan',
                'description' => 'One-on-one personalized support for better growth.',
                'price' => '£180 /month',
                'features' => [
                    '4 Sessions per Week',
                    'One-on-One Tutoring',
                    'Personalized Learning Plan',
                    'Interactive Learning Games',
                    '24/7 Support',
                ],
            ],

            // Key Stage 2 (KS2) Plans
            'KS2 Basic Plan' => [
                'name' => 'KS2 Basic Plan',
                'description' => 'Foundation learning for 11+ preparation.',
                'price' => '£110 /month',
                'features' => [
                    '2 Sessions per Week',
                    'Group Classes (Max 6 Students)',
                    'Practice Worksheets',
                    'Email Support Only',
                    'No Mock Exams',
                ],
            ],
            'KS2 Standard Plan' => [
                'name' => 'KS2 Standard Plan',
                'description' => 'Enhanced 11+ practice with feedback.',
                'price' => '£150 /month',
                'features' => [
                    '3 Sessions per Week',
                    'Small Group Classes (Max 4 Students)',
                    'Homework Review & Feedback',
                    'Monthly Assessments',
                    'Chat & Email Support',
                ],
            ],
            'KS2 Premium Plan' => [
                'name' => 'KS2 Premium Plan',
                'description' => 'Comprehensive 11+ prep with personalized support.',
                'price' => '£200 /month',
                'features' => [
                    '4 Sessions per Week',
                    'One-on-One Tutoring',
                    'Mock Exams & Analysis',
                    'Personalized Study Plan',
                    '24/7 Tutor Support',
                ],
            ],

            // Key Stage 3 (KS3) Plans
            'KS3 Basic Plan' => [
                'name' => 'KS3 Basic Plan',
                'description' => 'Foundation level support for GCSE preparation.',
                'price' => '£120 /month',
                'features' => [
                    '2 Sessions per Week',
                    'Group Classes (Max 8 Students)',
                    'Core Subject Support',
                    'Email Support Only',
                    'No Exam Practice',
                    'No Monthly Performance Reviews',
                    'No 24/7 Tutor Support',
                    'No Weekly Progress Reports',
                    'No Mock Exams & Analysis',
                    'No Interactive Learning Tools',
                    'No Personal/Life Skills Development',
                ],
            ],
            'KS3 Standard Plan' => [
                'name' => 'KS3 Standard Plan',
                'description' => 'Intermediate level for GCSE support with feedback.',
                'price' => '£160 /month',
                'features' => [
                    '3 Sessions per Week',
                    'Small Group Sessions (Max 4 Students)',
                    'Exam-style Questions & Feedback',
                    'Chat & Email Support',
                    'Monthly Performance Reviews',
                    'No 24/7 Tutor Support',
                    'No Weekly Progress Reports',
                    'No Mock Exams & Analysis',
                    'No Interactive Learning Tools',
                    'No Personal/Life Skills Development',
                ],
            ],
            'KS3 Premium Plan' => [
                'name' => 'KS3 Premium Plan',
                'description' => 'Comprehensive one-on-one GCSE preparation.',
                'price' => '£400 /month',
                'features' => [
                    'Everything in Standard Plan',
                    '4 Sessions per Week',
                    'One-on-One Subject-Specific Tutoring',
                    'Full GCSE Prep with Past Papers',
                    'Personalised Study Tracker',
                    '24/7 Tutor Support',
                    'Weekly Progress Reports',
                    'Mock Exams & Analysis',
                    'Interactive Learning Tools',
                    'Personal/Life Skills Development',
                ],
            ],

            // Default fallback
        ];

        return $plans[$plan] ?? [
            'name' => 'Unknown Plan',
            'description' => 'No description available.',
            'price' => 'N/A',
            'features' => [],
        ];
    }

    // Cancel a booking and free the slot
    public function cancelBooking(Request $request, Booking $booking)
    {
        // The 'signed' middleware verifies the signature, so no CSRF needed here

        $booking->status = 'canceled';
        $booking->save();

        // Send cancellation emails to client and owner
        $serviceDetails = $this->getServiceDetails($booking->plan);

        Mail::to($booking->client_email)->send(new \App\Mail\BookingConfirmationMail($booking, 'canceled', $serviceDetails));
        Mail::to('olasunkanmiarowolo@gmail.com')->send(new \App\Mail\BookingNotificationMail($booking, $serviceDetails, 'canceled'));

        $serviceDetails = $this->getServiceDetails($booking->plan);

        return view('booking.success', ['booking' => $booking, 'serviceDetails' => $serviceDetails])
            ->with('status', 'Your booking has been canceled and the slot is now available.');
    }

    // Confirm booking payment by business owner and notify client
    public function confirmBooking(Request $request, Booking $booking)
    {
        $booking->payment_status = 'paid';
        $booking->save();

        $serviceDetails = $this->getServiceDetails($booking->plan);

        Mail::to($booking->client_email)->send(new \App\Mail\BookingConfirmationMail($booking, 'paid', $serviceDetails));

        return view('booking.success', ['booking' => $booking, 'serviceDetails' => $serviceDetails])
            ->with('status', 'Booking payment has been confirmed and the client has been notified.');
    }
}
