@extends('layouts.email')

@section('content')
<p>Dear OA Tutor Team,</p>

@if ($status === 'canceled')
<p>The following booking has been canceled:</p>
@else
<p>A new booking has been made:</p>
@endif

<ul>
    <li>Client Name: {{ $booking->client_name }}</li>
    <li>Client Email: {{ $booking->client_email }}</li>
    <li>Plan: {{ $serviceDetails['name'] ?? 'N/A' }}</li>
    <li>Booking Date: {{ $booking->booking_date }}</li>
    <li>Time Slot: {{ $booking->booking_time_slot }}</li>
</ul>

@if ($status !== 'canceled')
<p>If you wish to cancel this booking, please click the button below:</p>

@php
    $cancelUrl = URL::signedRoute('booking.cancel', ['booking' => $booking->id]);
    $confirmUrl = URL::signedRoute('booking.confirm', ['booking' => $booking->id]);
@endphp

<a href="{{ $confirmUrl }}" style="background-color:#28a745; color:white; padding:10px 20px; border:none; border-radius:5px; text-decoration:none; display:inline-block; cursor:pointer; margin-right: 10px;">
    Confirm Booking
</a>

<a href="{{ $cancelUrl }}" style="background-color:#dc3545; color:white; padding:10px 20px; border:none; border-radius:5px; text-decoration:none; display:inline-block; cursor:pointer;">
    Cancel Booking
</a>
@endif

<p>Best regards,<br>OA Tutor Booking System</p>
@endsection
