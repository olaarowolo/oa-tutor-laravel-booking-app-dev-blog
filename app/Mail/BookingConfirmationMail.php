<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $status;
    public $serviceDetails;

    /**
     * Create a new message instance.
     */
    public function __construct(Booking $booking, string $status, array $serviceDetails)
    {
        $this->booking = $booking;
        $this->status = $status;
        $this->serviceDetails = $serviceDetails;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        if ($this->status === 'canceled') {
            $subject = 'Booking Cancellation Confirmation';
            return $this->subject($subject)
                        ->view('emails.booking_cancellation');
        }

        $subject = $this->status === 'pending' ? 'Booking Confirmation - Payment Pending' : 'Booking Confirmation - Payment Successful';

        // Generate ICS calendar content
        $startDateTime = $this->booking->booking_date . ' ' . explode('-', $this->booking->booking_time_slot)[0] . ':00';
        $start = date('Ymd\THis\Z', strtotime($startDateTime));
        $end = date('Ymd\THis\Z', strtotime($startDateTime . ' +1 hour'));
        $uid = uniqid() . '@oa-tutor.com';
        $summary = 'Booking: ' . $this->serviceDetails['name'];
        $description = 'Booking for ' . $this->booking->client_name . '. Please do not forget to add this event to your calendar.';
        $location = 'Online / OA Tutor';

        $icsContent = "BEGIN:VCALENDAR\r\n";
        $icsContent .= "VERSION:2.0\r\n";
        $icsContent .= "PRODID:-//OA Tutor Booking//EN\r\n";
        $icsContent .= "BEGIN:VEVENT\r\n";
        $icsContent .= "UID:$uid\r\n";
        $icsContent .= "DTSTAMP:" . gmdate('Ymd\THis\Z') . "\r\n";
        $icsContent .= "DTSTART:$start\r\n";
        $icsContent .= "DTEND:$end\r\n";
        $icsContent .= "SUMMARY:$summary\r\n";
        $icsContent .= "DESCRIPTION:$description\r\n";
        $icsContent .= "LOCATION:$location\r\n";
        $icsContent .= "BEGIN:VALARM\r\n";
        $icsContent .= "TRIGGER:-PT30M\r\n";
        $icsContent .= "ACTION:DISPLAY\r\n";
        $icsContent .= "DESCRIPTION:Reminder\r\n";
        $icsContent .= "END:VALARM\r\n";
        $icsContent .= "END:VEVENT\r\n";
        $icsContent .= "END:VCALENDAR\r\n";

        if ($this->status === 'paid') {
            return $this->subject($subject)
                        ->view('emails.booking_confirmation')
                        ->attachData($icsContent, 'booking.ics', [
                            'mime' => 'text/calendar',
                        ]);
        } else {
            return $this->subject($subject)
                        ->view('emails.booking_confirmation');
        }
    }
}
