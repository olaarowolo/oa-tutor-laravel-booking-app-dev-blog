@extends('layouts.app')

@section('title', 'Booking Successful')
@include('components.head')
@include('partials.navbar')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-semibold mb-6">Booking Successful</h2>
    <p>Thank you, {{ $booking->client_name }}, for your booking.</p>
    <p>Your booking for the {{ $booking->plan }} on {{ $booking->booking_date }} during the {{ $booking->booking_time_slot }} time slot has been received.</p>

    <p><strong>Service Details:</strong></p>
    <ul>
        <li>Name: {{ $serviceDetails['name'] }}</li>
        <li>Description: {{ $serviceDetails['description'] }}</li>
        <li>Price: {{ $serviceDetails['price'] }}</li>
        <li>Features:</li>
        <ul>
            @foreach ($serviceDetails['features'] as $feature)
                <li>✔ {{ $feature }}</li>
            @endforeach
        </ul>
    </ul>

    <p>We will contact you shortly with further details.</p>

    @if ($booking->status === 'canceled')
        <p class="mt-4 text-green-600 font-semibold">Your booking has been successfully canceled.</p>
    @else
        @php
            $cancelUrl = URL::signedRoute('booking.cancel', ['booking' => $booking->id]);
        @endphp

        <a href="{{ $cancelUrl }}" onclick="return confirm('Are you sure you want to cancel this booking?');" class="mt-4 inline-block bg-red-600 text-white px-6 py-3 rounded hover:bg-red-700 transition">
            Cancel Booking
        </a>
    @endif

    <a href="{{ url('/') }}" class="mt-4 inline-block bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">Return to Home</a>
</div>
@endsection
