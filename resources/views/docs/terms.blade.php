@extends('layouts.app')

@include('components.head')


@section('title', 'Terms and Conditions')

@section('content')
    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="terms">
        <main class="max-w-5xl w-full">
            <section class="mb-8">

                <h2 class="text-2xl font-bold mb-4">Terms and Conditions</h2>

                <p>Welcome to tutor.olaarowolo.com (the “Website”). By accessing or using this Website, you agree to be
                    bound by these Terms and Conditions (“Terms”). Please read them carefully. If you do not agree with any
                    part of these Terms, please refrain from using our Website and services.</p>

                <h2 class="text-2xl font-bold mb-4">1. Overview of Services</h2>
                <p>O.A. Tutors provides educational tutoring services (“Services”) as described on the Website. Our services
                    are available online and in-person, subject to pricing and availability, and are tailored to meet
                    students’ individual learning needs.</p>

                <h2 class="text-2xl font-bold mb-4">2. Use of Website</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>You must be at least 18 years of age or have permission from a parent/guardian to use this Website.
                    </li>
                    <li>You agree to use this Website for lawful purposes only and in accordance with these Terms.</li>
                    <li>We reserve the right to modify, suspend, or discontinue any part of the Website or Services at any
                        time.</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">3. Payment and Fees</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>All fees for Services are listed on the Website and are subject to change at O.A. Tutors’
                        discretion.</li>
                    <li>Payments for online and in-person sessions must be made in advance, either through Stripe or PayPal,
                        or as specified at the time of booking.</li>
                    <li>For in-person sessions, additional fees may apply if the tutor must travel beyond certain distances
                        or times, as detailed on our Website.</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">4. Cancellations and Refunds</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Cancellations by the Client: Clients must provide at least 48 hours’ notice to cancel or reschedule
                        a session. Failure to do so may result in a forfeited session fee.</li>
                    <li>Cancellations by O.A. Tutors: If we must cancel a session, we will provide a full refund or
                        reschedule at no additional cost.</li>
                    <li>Refunds are generally not provided except under extenuating circumstances, which will be determined
                        on a case-by-case basis.</li>
                    <li> Read our full refund policy <a href="/booking-policy/#cancellation"> <u>here</u></a>. </li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">5. Intellectual Property</h2>
                <p>All content on the Website, including but not limited to text, graphics, logos, and software, is owned by
                    or licensed to O.A. Tutors and protected by intellectual property laws. You may not reproduce,
                    distribute, or create derivative works from any of the Website’s content without our express written
                    consent.</p>

                <h2 class="text-2xl font-bold mb-4">6. Limitation of Liability</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>O.A. Tutors will not be liable for any indirect, incidental, or consequential damages arising from
                        the use or inability to use our Website or Services.</li>
                    <li>Our liability is limited to the amount you have paid for our Services, except where this limitation
                        is not permitted by law.</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4">7. Privacy Policy</h2>
                <p>Your privacy is important to us. Please refer to our <a href="/privacy-policy"> <u>Privacy Policy</u>
                    </a> for details on how we collect, use, and protect your personal information.</p>

                <h2 class="text-2xl font-bold mb-4">8. Changes to Terms</h2>
                <p>We may update these Terms from time to time. Changes will be posted on this page, and your continued use
                    of the Website constitutes acceptance of the updated Terms.</p>

                <h2 class="text-2xl font-bold mb-4">9. Governing Law</h2>
                <p>These Terms are governed by and construed in accordance with the laws of the United Kingdom. Any disputes
                    arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the
                    courts of the United Kingdom.</p>

                <h2 class="text-2xl font-bold mb-4">10. Contact Information</h2>
                <p>For questions regarding these Terms, please contact us at <a href="mailto:support@tutor.olaarowolo.com"
                        class="text-blue-500">support@tutor.olaarowolo.com</a>.</p>

            </section>
        </main>
    </section>
@endsection
