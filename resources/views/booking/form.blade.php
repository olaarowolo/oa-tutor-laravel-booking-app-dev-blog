@extends('layouts.app')

@section('title', 'Book KS2 Basic Plan')
@include('components.head')
@include('partials.navbar')
@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-semibold mb-6">Book a Plan</h2>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-200 text-red-800 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('booking.submit') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="client_name" class="block mb-1 font-semibold">Name</label>
            <input type="text" id="client_name" name="client_name" value="{{ old('client_name') }}" required
                class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="client_email" class="block mb-1 font-semibold">Email</label>
            <input type="email" id="client_email" name="client_email" value="{{ old('client_email') }}" required
                class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="phone_number" class="block mb-1 font-semibold">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
                class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="booking_date" class="block mb-1 font-semibold">Booking Date (Tuesday or Wednesday)</label>
            <input type="date" id="booking_date" name="booking_date" value="{{ old('booking_date') }}" required
                class="w-full border border-gray-300 rounded px-3 py-2" min="{{ date('Y-m-d') }}">
        </div>

        <div class="mb-4">
            <label for="booking_time_slot" class="block mb-1 font-semibold">Time Slot</label>
            <select id="booking_time_slot" name="booking_time_slot" required class="w-full border border-gray-300 rounded px-3 py-2">
                <option value="">Select a time slot</option>
                <option value="4-5pm" {{ old('booking_time_slot') == '4-5pm' ? 'selected' : '' }}>4-5pm</option>
                <option value="5-6pm" {{ old('booking_time_slot') == '5-6pm' ? 'selected' : '' }}>5-6pm</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="plan" class="block mb-1 font-semibold">Select Plan</label>
            <select id="plan" name="plan" required class="w-full border border-gray-300 rounded px-3 py-2">
                <option value="">Select a plan</option>
                <optgroup label="Key Stage 1 (KS1) Plans">
                    <option value="KS1 Basic Plan" {{ old('plan') == 'KS1 Basic Plan' ? 'selected' : '' }}>KS1 Basic Plan</option>
                    <option value="KS1 Standard Plan" {{ old('plan') == 'KS1 Standard Plan' ? 'selected' : '' }}>KS1 Standard Plan</option>
                    <option value="KS1 Premium Plan" {{ old('plan') == 'KS1 Premium Plan' ? 'selected' : '' }}>KS1 Premium Plan</option>
                </optgroup>
                <optgroup label="Key Stage 2 (KS2) Plans">
                    <option value="KS2 Basic Plan" {{ old('plan') == 'KS2 Basic Plan' ? 'selected' : '' }}>KS2 Basic Plan</option>
                    <option value="KS2 Standard Plan" {{ old('plan') == 'KS2 Standard Plan' ? 'selected' : '' }}>KS2 Standard Plan</option>
                    <option value="KS2 Premium Plan" {{ old('plan') == 'KS2 Premium Plan' ? 'selected' : '' }}>KS2 Premium Plan</option>
                </optgroup>
                <optgroup label="Key Stage 3 (KS3) Plans">
                    <option value="KS3 Basic Plan" {{ old('plan') == 'KS3 Basic Plan' ? 'selected' : '' }}>KS3 Basic Plan</option>
                    <option value="KS3 Standard Plan" {{ old('plan') == 'KS3 Standard Plan' ? 'selected' : '' }}>KS3 Standard Plan</option>
                    <option value="KS3 Premium Plan" {{ old('plan') == 'KS3 Premium Plan' ? 'selected' : '' }}>KS3 Premium Plan</option>
                </optgroup>
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">Book Now</button>
    </form>
</div>
@endsection
