@extends('layouts.email')

@section('content')
<p>Dear {{ $booking->client_name }},</p>

@if ($status === 'pending')
<p>Thank you for your booking. Your payment is currently pending.</p>
@else
<p>Your payment has been successfully received. Thank you!</p>
@endif

<p>Here are the details of your booking:</p>
<ul>
    <li>Plan: {{ $serviceDetails['name'] }}</li>
    <li>Description: {{ $serviceDetails['description'] }}</li>
    <li>Price: {{ $serviceDetails['price'] }}</li>
    <li>Features:
        <ul>
            @foreach ($serviceDetails['features'] as $feature)
                <li>✔ {{ $feature }}</li>
            @endforeach
        </ul>
    </li>
    <li>Booking Date: {{ $booking->booking_date }}</li>
    <li>Time Slot: {{ $booking->booking_time_slot }}</li>
</ul>

<p>Please find attached an ICS calendar file for your booking. <strong>Don't forget to click the attached file to add the booking to your calendar.</strong></p>

<p>We look forward to seeing you!</p>

<p>Best regards,<br>OA Tutor Team</p>

<p>If you wish to cancel your booking, please click the button below:</p>

@php
    $cancelUrl = URL::signedRoute('booking.cancel', ['booking' => $booking->id]);
@endphp

<a href="{{ $cancelUrl }}" style="background-color:#dc3545; color:white; padding:10px 20px; border:none; border-radius:5px; text-decoration:none; display:inline-block; cursor:pointer;">
    Cancel Booking
</a>
@endsection
