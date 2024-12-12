@extends('layouts.app')
@include('components.head')
@include('partials.header')
@section('title', 'Booking Policy')
@section('content')
    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="services">
        <main class="max-w-4xl w-full">
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">OA Tutors Tuition Booking Policy <a class="fa fa-download"
                        aria-hidden="true" href="/assets/docs/oa-tutor-booking-policy.pdf" target="_blank"> </a> </h2>
                <p>
                    This policy provides the guidelines for booking tuition sessions at OA Tutors, covering both
                    online and in-person sessions. It ensures a smooth, professional experience for students and
                    tutors alike.
                </p>
                <h2 class="text-2xl font-bold mb-4">1. Booking Process</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>All tuition sessions, whether online or in-person, must be booked through the OA Tutors
                        website (tutor.olaarowolo.com) or via an official representative.</li>
                    <li>Sessions can be booked in hourly slots, with a minimum of 1 hour per booking.</li>
                    <li>Bookings should be made at least 48 hours in advance to ensure tutor availability.</li>
                    <li>A confirmation email or SMS will be sent once the booking is complete and payment has
                        been
                        received.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">2. Payment and Fees</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Full payment is required at the time of booking to secure the session, whether it is
                        conducted online or in-person.</li>
                    <li>OA Tutors accepts payments via PayPal and bank transfer.</li>
                    <li>All fees for tuition sessions are displayed clearly on the booking page, and clients are
                        encouraged to review the pricing before confirming their booking.</li>
                    <li>In-person sessions may incur additional travel costs, depending on the location. These
                        will
                        be discussed and agreed upon at the time of booking.</li>
                </ul>
                <h2 id="cancellation" class="text-2xl font-bold mb-4">3. Cancellation and Rescheduling Policy</h2>
                <h3>Cancellation by the Client:</h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Sessions canceled more than 48 hours before the scheduled time are eligible for a full
                        refund or can be rescheduled at no additional cost.</li>
                    <li>Cancellations made less than 48 hours before the session will incur a 50% charge, and
                        the
                        remaining 50% will be refunded.</li>
                    <li>Failure to attend a session without prior notice will result in 100% of the fee being
                        charged.</li>
                </ul>
                <h3>Cancellation by OA Tutors:</h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>If OA Tutors or the tutor needs to cancel a session (whether online or in-person),
                        students
                        will be notified as soon as possible, and the session will either be rescheduled at no
                        extra cost
                        or a full refund will be provided.</li>
                </ul>
                <h3>Rescheduling:</h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Sessions can be rescheduled without penalty if the request is made more than 48 hours in
                        advance.</li>
                    <li>Rescheduling requests made within 48 hours of the session will be treated as
                        cancellations and are subject to the cancellation policy.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">4. Late Arrivals</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Students who arrive late for their session, whether online or in-person, will still be
                        charged for the full duration of the session. The session will end at the originally
                        scheduled time.</li>
                    <li>Tutors will wait for 15 minutes after the scheduled start time. If the student has not
                        arrived or logged in by then, the session will be considered a no-show and charged in
                        full.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">5. Tutor Availability</h2>
                <p>OA Tutors strives to match students with their preferred tutor, but we cannot guarantee the
                    availability of specific tutors for every session.</p>
                <p>In cases where a preferred tutor is unavailable, an alternative tutor will be offered, or the
                    session can be rescheduled.</p>
                <h2 class="text-2xl font-bold mb-4">6. Group Bookings</h2>
                <p>Group sessions (involving more than one student) can be arranged for both online and
                    in-person formats. Pricing may vary depending on the number of participants and session
                    requirements.</p>
                <p>Group bookings are subject to the same payment, cancellation, and rescheduling policies as
                    individual sessions.</p>
                <h2 class="text-2xl font-bold mb-4">7. Emergency Cancellations</h2>
                <p>In the event of an emergency (e.g., tutor illness, technical difficulties for online
                    sessions, or unforeseen travel issues for in-person sessions), both parties will be notified
                    as soon as possible. Sessions will be rescheduled at no extra cost, or a full refund will be
                    provided if rescheduling is not possible.</p>
                <div>
                    <p class="text-2xl font-bold mb-4">Download to sign
                        <a class="fa fa-download" aria-hidden="true"
                            href="https://tutor.olaarowolo.com/assets/docs/oa-tutor-booking-policy.pdf" target="_blank">
                        </a>
                    </p>
                </div>
            </section>
        </main>
    </section>
@endsection
