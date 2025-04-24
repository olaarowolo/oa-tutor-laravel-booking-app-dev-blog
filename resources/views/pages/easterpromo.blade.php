@extends('layouts.app')
@section('title', 'Coding for Kids')
@include('components.head')
@include('partials.header')
@include('components.easterpromo')

@section('content')
    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="services">
        <main class="max-w-5xl w-full">
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4 section__title">Welcome to the 11+ Exam GL Mastery - Easter Course</h2>
                <p>Thank you for considering tutor.olaarowolo.com to support your child's preparation for the GL Exams. Our
                    11+ Exam GL Mastery - Easter Course is designed to equip your child with the skills and confidence
                    needed to excel.</p>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Why Choose This Course?</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Comprehensive Coverage:</strong> 10 dynamic sessions covering GL-style English, Maths, and
                        Verbal Reasoning.</li>
                    <li><strong>Convenient Learning:</strong> Downloadable PDF lecture notes after every session for easy
                        revision.</li>
                    <li><strong>Daily Progress Tracking:</strong> Auto-marked online homework to monitor performance.</li>
                    <li><strong>Real Exam Simulation:</strong> A final online mock exam to gauge readiness before the big
                        day.</li>
                    <li><strong>Tailored for Year 5:</strong> Suitable for students preparing for Grammar and Independent
                        Schools following the GL Assessment.</li>
                </ul>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Course Details</h2>
                <p><strong>Dates:</strong></p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Start Date: Sunday, 6th April 2025</li>
                    <li>End Date: Wednesday, 16th April 2025</li>
                </ul>
                <p><strong>Timings for Each 2.5-Hour Session:</strong></p>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Maths:</strong> 1:30 PM - 2:30 PM</li>
                    <li><strong>Verbal Reasoning:</strong> 2:45 PM - 3:15 PM</li>
                    <li><strong>English:</strong> 3:30 PM - 4:30 PM</li>
                </ul>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Pricing and Special Offer</h2>
                <p><strong>Original Price:</strong> £300</p>
                <p><strong>Special Discount:</strong> Get 60% OFF – Now only <strong>£120</strong>!</p>
                <p>Secure your child's spot today and give them the advantage they need to excel in the GL Exams.</p>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">What Makes This Course Unique?</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Structured Learning:</strong> Sessions designed to build understanding step by step.</li>
                    <li><strong>Practical Applications:</strong> Relating concepts to real-world scenarios to improve
                        comprehension.</li>
                    <li><strong>Engaging Delivery:</strong> Interactive lessons that keep learners motivated.</li>
                </ul>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Final Mock Exam for Confidence</h2>
                <p>The final session includes a realistic mock exam to simulate real exam conditions, helping your child
                    build confidence and improve exam techniques.</p>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Limited Time Offer – Enroll Now!</h2>
                <p>Don't miss this opportunity to give your child the edge they need to excel. Enroll today and set them on
                    the path to success!</p>
            </section>
        </main>
    </section>

    <!--==================== SWIPER JS ====================-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>
    <script>
        function toggleDescription() {
            var fullDescription = document.getElementById("full-description");
            if (fullDescription.classList.contains("hidden")) {
                fullDescription.classList.remove("hidden");
                document.querySelector(".text-blue-500").textContent = "Read less";
            } else {
                fullDescription.classList.add("hidden");
                document.querySelector(".text-blue-500").textContent = "Read full description";
            }
        }
    </script>
@endsection
