@extends('layouts.app')
@section('title', 'Easter Promo – OA Tutors')
@include('components.meta')
@section('og_image', asset('img/og/easter_promo_og.png'))
@section('og_description', 'Join our focused Easter group tuition for 11+ and GCSE students.')
<!--<meta property="og:title" content="Easter Break Online Tuition – OA Tutors" />-->
<meta property="og:description"
    content="Join our Easter group tuition for 11+ and GCSE students. Learn with compassionate, Christian-based values in an inclusive, focused environment." />
<meta property="og:image" content="/assets/img/og/easter_promo_og.png" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary_large_image">
@include('partials.navbar')



@section('content')
    <section class="container px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="easter-package">
        <main class="max-w-4xl w-full">
            <section class="mb-8">

                <h2 class="text-2xl font-bold mb-4">Easter Break Online Tuition Package</h2>

                <p>
                    This Easter, OA Tutors is offering focused <strong>Online Group Tuition</strong> for students preparing
                    for
                    the <strong>11+ entrance exams</strong> and <strong>GCSEs</strong>. Our sessions are delivered by
                    qualified,
                    passionate tutors who teach with excellence, compassion, and a foundation in Christian values—while
                    welcoming
                    learners of all backgrounds.
                </p>

                <h2 class="text-2xl font-bold mb-4 mt-6">What’s Included?</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Live online small group sessions</li>
                    <li>Subjects: English, Maths, Science, and Reasoning (for 11+)</li>
                    <li>Interactive lessons, exam techniques, and personalised feedback</li>
                    <li>Access to digital learning resources</li>
                    <li>Inclusive, value-based environment rooted in Christian principles</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4 mt-6">Schedule & Access</h2>
                <p>
                    Sessions run during the Easter school holidays. Students can choose from morning, afternoon, or evening
                    slots, depending on availability. All sessions are held online via secure video platforms.
                </p>

                <h2 class="text-2xl font-bold mb-4 mt-6">Fees</h2>
                <p>
                    Our Easter Break package is designed to be affordable and impactful. Please fill out the form below to
                    receive
                    full pricing details and available time slots.
                </p>

                <h2 class="text-2xl font-bold mb-4 mt-6">Enrol Now</h2>
                <p class="mb-4">
                    Click the button below to start your enrolment. A short form will appear for you to complete.
                </p>

                <!-- Enrolment Button -->
                <div class="mb-6">
                    <button onclick="showForm()"
                        class="bg-blue-400 hover:bg-blue-500 text-white font-semibold py-2 px-6 rounded-xl shadow-md transition">
                        Start Enrolment
                    </button>
                </div>

            </section>
        </main>
    </section>

    <!-- Fullscreen Form Modal -->
    <div id="formModal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
        <div class="relative w-full h-full p-4 flex items-center justify-center">
            <!-- Close Button -->
            <button onclick="closeForm()"
                class="absolute top-4 right-6 text-white text-3xl font-bold z-50 hover:text-red-400">&times;</button>

            <!-- Form Iframe -->
            <iframe class="w-full h-full max-w-5xl max-h-[90vh] bg-white rounded-lg shadow-lg"
                src="https://forms.office.com/r/MheUyW7Qvt?embed=true" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function showForm() {
            document.getElementById("formModal").classList.remove("hidden");
            document.body.classList.add("overflow-hidden"); // Prevent background scroll
        }

        function closeForm() {
            document.getElementById("formModal").classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        }
    </script>

@endsection
