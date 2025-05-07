@extends('layouts.app')
@section('title', 'Coding for Kids')
@include('components.head')
@include('partials.navbar')
@include('components.slider')
@section('content')
    @include('components.backtoschool-slider')

    <!-- Services Offered -->
    <section class="hero2 px-5 py-5 mx-auto flex flex-wrap items-center justify-center" class="text-gray-600
 body-font"
        id="services">
        <div class="px-5 py-10 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="blog xl:w-4/4 md:w-2/2" id="">
                    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="">
                        <main class="max-w-5xl w-full">
                            <section class="mb-8">
                                <h2 class="h3">Welcome to 11+ Tutoring</h2>
                                <p class="blog-text">Thank you for inquiring about 11+ lessons with tutor.olaarowolo.com.
                                    I'm excited to support your child's
                                    preparation for this important milestone.</p>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold mb-4 ">Areas of Expertise</h2>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Verbal Reasoning: Vocabulary, comprehension, logical thinking</li>
                                    <li>Non-Verbal Reasoning: Spatial awareness, pattern recognition, problem-solving</li>
                                    <li>Mathematics: Arithmetic, algebra, advanced problem-solving</li>
                                    <li>English: Reading comprehension, writing skills, grammar</li>
                                </ul>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold mb-4">My Tutoring Approach</h2>
                                <p>I offer personalised lessons that:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Build strong foundational skills</li>
                                    <li>Foster critical thinking</li>
                                    <li>Enhance exam techniques</li>
                                    <li>Provide regular feedback</li>
                                </ul>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold mb-4">Teaching Philosophy</h2>
                                <p>Guided by principles of clear communication, practical applications, flexibility,
                                    support, discipline,
                                    and
                                    respect, I empower students to shape their paths to success.</p>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold mb-4">Experience and Approach</h2>
                                <p>With over seven years of international experience, I tailor my teaching to each student's
                                    pace and style,
                                    providing unwavering support.</p>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold mb-4">Lesson Format</h2>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Learner-Centered Approach: Tailored methods for different learning styles</li>
                                    <li>Engaging Delivery: Interactive and enjoyable lessons</li>
                                    <li>Theoretical and Practical Balance: Relating concepts to real-world situations</li>
                                </ul>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold mb-4">Free Initial Assessment</h2>
                                <p>I offer the first hour at half the fee, starting with a practice question to assess your
                                    child's
                                    abilities.
                                    We then begin lessons by reviewing this assessment and then cascade to 11+ lesson
                                    proper.</p>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold mb-4">Pricing</h2>
                                <p>I charge £22 per hour but am open to moderate negotiation based on the outcome of our
                                    initial session.
                                </p>
                            </section>
                        </main>
                    </section>


                    <!--  END O045F SUBJECTS LISTS -->
                </div>
            </div>
            @include('components.why-us')

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
