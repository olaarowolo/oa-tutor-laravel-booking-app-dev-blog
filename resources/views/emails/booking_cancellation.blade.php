@extends('layouts.email')

@section('content')
<p>Dear {{ $booking->client_name }},</p>

<p>We regret to inform you that your booking for the {{ $serviceDetails['name'] }} on {{ $booking->booking_date }} during the {{ $booking->booking_time_slot }} time slot has been canceled.</p>

<p>If you have any questions or would like to book another session, please contact us or visit our booking page.</p>

<p>Best regards,<br>OA Tutor Team</p>
@endsection
