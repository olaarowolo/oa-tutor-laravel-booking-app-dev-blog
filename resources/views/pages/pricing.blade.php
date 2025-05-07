@extends('layouts.app')
@include('components.head')
@include('partials.navbar')
@section('title', 'Coding for Kids')
@include('components.slider')
@section('content')
    @vite('resources/css/pages/packages.css')


    <!-- KS1 PRICING START -->
    <section id="pricing-ks1" class="pricing-1 md:py-24 py-12  bg-gray-100 dark:bg-[#fffdfd]">
        <div class="container">
            <!-- TITLE START -->
            <div class="text-center max-w-3xl mx-auto mb-10">
                <h2 class="md:text-5xl text-3xl font-semibold text-light dark:text-dark">
                    Key Stage 1 (KS1) Plans
                </h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300 md:text-lg">
                    Build a strong foundation for your child's academic journey with personalized learning plans.
                </p>
            </div>
            <!-- TITLE END -->

            <!-- =============================== KS1 PRICING LIST START =============================== -->
            <ul class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">

                <!-- KS1 Basic Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <h3 class="mb-4 text-2xl font-semibold">KS1 Basic Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            Early learning essentials for foundational growth.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£100</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ 2 Sessions per Week</li>
                            <li>✔ Group Classes (Max 5 Students)</li>
                            <li>✔ Basic Learning Materials</li>
                            <li>✔ Email Support Only</li>
                            <li>❌ No 1:1 Tutoring</li>
                        </ul>
<a href="{{ route('booking.form') }}"
    class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500">
    Book Now
</a>

                    </div>
                </li>

                <!-- KS1 Standard Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border-2 border-light dark:border-dark shadow-md xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <!-- RECOMMENDED -->
                        <div
                            class="ribbon absolute -top-2 -right-2 h-40 w-40 overflow-hidden before:absolute before:top-0 before:left-0 before:border-4 before:border-light dark:before:border-dark after:absolute after:right-0 after:bottom-0 after:border-4 after:border-light dark:after:border-dark rounded-md">
                            <div
                                class="absolute -right-14 top-[43px] w-60 rotate-45 bg-light dark:bg-dark py-2.5 text-center text-white shadow-md">
                                Recommended
                            </div>
                        </div>
                        <h3 class="mb-4 text-2xl font-semibold">KS1 Standard Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            Enhanced learning resources with extra support.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£140</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ 3 Sessions per Week</li>
                            <li>✔ Small Group Classes (Max 3 Students)</li>
                            <li>✔ Enhanced Learning Materials</li>
                            <li>✔ Email & Chat Support</li>
                            <li>✔ Homework Assistance</li>

                        </ul>
<a href="{{ route('booking.form') }}"
    class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500">
    Book Now
</a>
                    </div>
                </li>

                <!-- KS1 Premium Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <h3 class="mb-4 text-2xl font-semibold">KS1 Premium Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            One-on-one personalized support for better growth.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£180</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ 4 Sessions per Week</li>
                            <li>✔ One-on-One Tutoring</li>
                            <li>✔ Personalized Learning Plan</li>
                            <li>✔ Interactive Learning Games</li>
                            <li>✔ 24/7 Support</li>
                        </ul>
                        <a href="#"
                            class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500">
                            Book Now
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- KS1 PRICING END -->


    <!-- =============================== KS2 PRICING START =============================== -->
    <section id="pricing-ks2" class="pricing-1 md:py-24 py-12 bg-gray-100 dark:bg-[#eedde2]">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <h2 class="md:text-5xl text-3xl font-semibold text-light dark:text-dark">
                    Key Stage 2 (KS2) Plans
                </h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300 md:text-lg">
                    Advanced learning plans designed to excel in 11+ exams.
                </p>
            </div>

            <ul class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
                <!-- KS2 Basic Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <h3 class="mb-4 text-2xl font-semibold">KS2 Basic Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            Foundation learning for 11+ preparation.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£110</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ 2 Sessions per Week</li>
                            <li>✔ Group Classes (Max 6 Students)</li>
                            <li>✔ Practice Worksheets</li>
                            <li>✔ Email Support Only</li>
                            <li>❌ No Mock Exams</li>
                        </ul>
                        <a href="#"
                            class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500">
                            Book Now
                        </a>


                    </div>
                </li>

                <!-- KS2 Standard Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border-2 border-light dark:border-dark shadow-md xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <!-- RECOMMENDED -->
                        <div
                            class="ribbon absolute -top-2 -right-2 h-40 w-40 overflow-hidden before:absolute before:top-0 before:left-0 before:border-4 before:border-light dark:before:border-dark after:absolute after:right-0 after:bottom-0 after:border-4 after:border-light dark:after:border-dark rounded-md">
                            <div
                                class="absolute -right-14 top-[43px] w-60 rotate-45 bg-light dark:bg-dark py-2.5 text-center text-white shadow-md">
                                Recommended
                            </div>
                        </div>
                        <h3 class="mb-4 text-2xl font-semibold">KS2 Standard Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            Enhanced 11+ practice with feedback.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£150</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ 3 Sessions per Week</li>
                            <li>✔ Small Group Classes (Max 4 Students)</li>
                            <li>✔ Homework Review & Feedback</li>
                            <li>✔ Monthly Assessments</li>
                            <li>✔ Chat & Email Support</li>
                        </ul>
                        <a href="#"
                            class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500">
                            Book Now
                        </a>
                    </div>
                </li>

                <!-- KS2 Premium Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <h3 class="mb-4 text-2xl font-semibold">KS2 Premium Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            Comprehensive 11+ prep with personalized support.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£200</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ 4 Sessions per Week</li>
                            <li>✔ One-on-One Tutoring</li>
                            <li>✔ Mock Exams & Analysis</li>
                            <li>✔ Personalized Study Plan</li>
                            <li>✔ 24/7 Tutor Support</li>
                        </ul>
                        <a href="#"
                            class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500">
                            Book Now
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- KS2 PRICING END -->


    <!-- =============================== KS3 PRICING START =============================== -->
    <section id="pricing-ks3" class="pricing-1 md:py-24 py-12">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <h2 class="md:text-5xl text-3xl font-semibold text-light dark:text-dark">
                    Key Stage 3 (KS3) Plans
                </h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300 md:text-lg">
                    Prepare for GCSEs with our targeted learning plans.
                </p>
            </div>

            <ul class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
                <!-- KS3 Basic Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <h3 class="mb-4 text-2xl font-semibold">KS3 Basic Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            Foundation level support for GCSE preparation.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£120</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ 2 Sessions per Week</li>
                            <li>✔ Group Classes (Max 8 Students)</li>
                            <li>✔ Core Subject Support</li>
                            <li>✔ Email Support Only</li>
                            <li>❌ No Exam Practice</li>
                            <li>❌Monthly Performance Reviews</li>
                            <li>❌ 24/7 Tutor Support</li>
                            <li>❌ Weekly Progress Reports</li>
                            <li>❌ Mock Exams & Analysis</li>
                            <li>❌ Interactive Learning Tools</li>
                            <li>❌ Personal/Life Skills Development</li>
                        </ul>
                        <a href="#"
                            class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500 calendly-popup"
                            onclick="Calendly.initPopupWidget({url: 'https://calendly.com/your-link'});return false;">
                            Book Now
                        </a>
                    </div>
                </li>

                <!-- KS3 Standard Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border-2 border-light dark:border-dark shadow-md xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <!-- RECOMMENDED -->
                        <div
                            class="ribbon absolute -top-2 -right-2 h-40 w-40 overflow-hidden before:absolute before:top-0 before:left-0 before:border-4 before:border-light dark:before:border-dark after:absolute after:right-0 after:bottom-0 after:border-4 after:border-light dark:after:border-dark rounded-md">
                            <div
                                class="absolute -right-14 top-[43px] w-60 rotate-45 bg-light dark:bg-dark py-2.5 text-center text-white shadow-md">
                                Recommended
                            </div>
                        </div>
                        <h3 class="mb-4 text-2xl font-semibold">KS3 Standard Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            Intermediate level for GCSE support with feedback.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£160</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ 3 Sessions per Week</li>
                            <li>✔ Small Group Sessions (Max 4 Students)</li>
                            <li>✔ Exam-style Questions & Feedback</li>
                            <li>✔ Chat & Email Support</li>
                            <li>✔ Monthly Performance Reviews</li>
                            <li>❌ 24/7 Tutor Support</li>
                            <li>❌ Weekly Progress Reports</li>
                            <li>❌ Mock Exams & Analysis</li>
                            <li>❌ Interactive Learning Tools</li>
                            <li>❌ Personal/Life Skills Development</li>

                        </ul>
                        <a href="#"
                            class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500 calendly-popup"
                            onclick="Calendly.initPopupWidget({url: 'https://calendly.com/your-link'});return false;">
                            Book Now
                        </a>
                    </div>
                </li>

                <!-- KS3 Premium Plan -->
                <li class="contents">
                    <div
                        class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white relative">
                        <h3 class="mb-4 text-2xl font-semibold">KS3 Premium Plan</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                            Comprehensive one-on-one GCSE preparation.
                        </p>
                        <div class="my-8 flex items-center">
                            <span class="mr-2 text-5xl font-extrabold text-light dark:text-dark">£400</span>
                            <span>/month</span>
                        </div>
                        <ul class="mb-8 space-y-4 text-left">
                            <li>✔ Everything in Standard Plan</li>
                            <li>✔ 4 Sessions per Week</li>
                            <li>✔ One-on-One Subject-Specific Tutoring</li>
                            <li>✔ Full GCSE Prep with Past Papers</li>
                            <li>✔ Personalised Study Tracker</li>

                            <li>✔ 24/7 Tutor Support</li>
                            <li>✔ Weekly Progress Reports</li>
                            <li>✔ Mock Exams & Analysis</li>
                            <li>✔ Interactive Learning Tools</li>
                            <li>✔ Personal/Life Skills Development</li>


                        </ul>
                        <a href="#"
                            class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500 calendly-popup"
                            onclick="Calendly.initPopupWidget({url: 'https://calendly.com/your-link'});return false;">
                            Book Now
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- KS3 PRICING END -->


@endsection





