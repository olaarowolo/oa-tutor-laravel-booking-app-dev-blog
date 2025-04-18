@extends('layouts.app')

@section('meta')
<meta property="og:image" content="{{ asset('assets/img/fliers/Back_to_School-Summer2025.png') }}" />
<meta property="og:description" content="Welcome to our Back to School Tuition Program at tutor.olaarowolo.com. Whether your child is preparing for Key Stage 2, Key Stage 3, the 11+ Exams, or their GCSEs, this program is designed to boost their confidence and academic performance as the new school term begins." />
@endsection

@section('title', 'Coding for Kids')
@include('components.head')
@include('partials.header')
@include('components.easterpromo')

@section('content')
    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="services">
        <main class="max-w-5xl w-full">
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4 section__title">Back to School Tuition – KS2, KS3, 11+ & GCSE Prep</h2>
                <p>Welcome to our <strong>Back to School Tuition Program</strong> at <a href="https://tutor.olaarowolo.com"
                        class="text-blue-600 underline">tutor.olaarowolo.com</a>. Whether your child is preparing for Key
                    Stage 2, Key Stage 3, the 11+ Exams, or their GCSEs, this program is designed to boost their confidence
                    and academic performance as the new school term begins.</p>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Why Join Our Back to School Sessions?</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Targeted Curriculum:</strong> Lessons tailored for KS2, KS3, 11+ Exam prep, and GCSE
                        subjects.</li>
                    <li><strong>Expert Teachers:</strong> Qualified and experienced tutors with proven results.</li>
                    <li><strong>Live Online Classes:</strong> Delivered via Microsoft Teams for easy access and interaction.
                    </li>
                    <li><strong>Progress Monitoring:</strong> Weekly quizzes and feedback to track performance.</li>
                    <li><strong>Small Group Focus:</strong> Interactive and engaging group sessions designed to enhance
                        learning.</li>
                </ul>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Session Details</h2>
                <p><strong>Program Duration:</strong> Weekly sessions (evenings and weekends)</p>
                <p><strong>Delivery:</strong> Online via Microsoft Teams</p>
                <p><strong>Suitable for:</strong> Students in KS2, KS3, those preparing for 11+ Exams, and GCSE candidates
                </p>
            </section>
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

                    <!-- LIMITED TIME OFFER Banner -->
                    <div
                        class="mt-6 mb-4 inline-block bg-red-600 text-white font-bold py-2 px-6 rounded-full text-lg shadow-md">
                        🎉 LIMITED TIME OFFER – 40% OFF!
                    </div>

                    <!-- Countdown Timer -->
                    <div class="text-xl font-semibold text-red-600 mt-2" id="ks2-timer">
                        Offer ends in: <span id="ks2-countdown">00d 00h 00m 00s</span>
                    </div>
                </div>

                <ul class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
                    <!-- KS2 Basic Plan -->
                    <li class="contents">
                        <div
                            class="flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white relative">
                            <!-- Ribbon -->
                            <div
                                class="absolute top-0 left-0 bg-red-500 text-white text-xs px-3 py-1 rounded-br-lg font-semibold">
                                LIMITED TIME OFFER
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">KS2 Basic Plan</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                                Foundation learning for 11+ preparation.
                            </p>
                            <div class="my-8 flex items-center gap-4">
                                <span class="line-through text-xl text-gray-500 dark:text-gray-400">£110</span>
                                <span class="text-5xl font-extrabold text-light dark:text-dark">£66</span>
                                <span class="text-sm">/month</span>
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
                            <!-- Ribbon -->
                            <div
                                class="absolute top-0 left-0 bg-red-500 text-white text-xs px-3 py-1 rounded-br-lg font-semibold">
                                LIMITED TIME OFFER
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">KS2 Standard Plan</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                                Enhanced 11+ practice with feedback.
                            </p>
                            <div class="my-8 flex items-center gap-4">
                                <span class="line-through text-xl text-gray-500 dark:text-gray-400">£150</span>
                                <span class="text-5xl font-extrabold text-light dark:text-dark">£90</span>
                                <span class="text-sm">/month</span>
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
                            <!-- Ribbon -->
                            <div
                                class="absolute top-0 left-0 bg-red-500 text-white text-xs px-3 py-1 rounded-br-lg font-semibold">
                                LIMITED TIME OFFER
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">KS2 Premium Plan</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                                Comprehensive 11+ prep with personalized support.
                            </p>
                            <div class="my-8 flex items-center gap-4">
                                <span class="line-through text-xl text-gray-500 dark:text-gray-400">£200</span>
                                <span class="text-5xl font-extrabold text-light dark:text-dark">£120</span>
                                <span class="text-sm">/month</span>
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
        <!-- =============================== KS2 PRICING END =============================== -->
        <!-- =============================== KS3 PRICING START =============================== -->
        <section id="pricing-ks3" class="pricing-1 md:py-24 py-12 relative bg-gray-100 light:bg-[#eedde2]">
            <div class="container pt-20">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <h2 class="md:text-5xl text-3xl font-semibold text-light dark:text-dark">
                        Key Stage 3 (KS3) Plans
                    </h2>
                    <p class="mt-4 text-gray-600 dark:text-gray-300 md:text-lg">
                        Prepare for GCSEs with our targeted learning plans.
                    </p>
                </div>

                <ul class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
                    <!-- Reusable card for each plan -->
                    <!-- KS3 BASIC PLAN -->
                    <li class="contents">
                        <div
                            class="relative flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white">
                            <!-- Ribbon -->
                            <div
                                class="absolute top-0 left-0 bg-red-500 text-white text-xs px-3 py-1 rounded-br-lg font-semibold">
                                LIMITED TIME OFFER
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">KS3 Basic Plan</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                                Foundation level support for GCSE preparation.
                            </p>
                            <div class="my-8 flex items-center space-x-3">
                                <span class="line-through text-2xl text-gray-400">£120</span>
                                <span class="text-4xl font-extrabold text-light dark:text-dark">£72</span>
                                <span>/month</span>
                            </div>
                            <ul class="mb-8 space-y-4 text-left">
                                <li>✔ 2 Sessions per Week</li>
                                <li>✔ Group Classes (Max 8 Students)</li>
                                <li>✔ Core Subject Support</li>
                                <li>✔ Email Support Only</li>
                                <li>❌ No Exam Practice</li>
                            </ul>
                            <a href="#"
                                class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500 calendly-popup"
                                onclick="Calendly.initPopupWidget({url: 'https://calendly.com/your-link'});return false;">
                                Book Now
                            </a>
                        </div>
                    </li>

                    <!-- KS3 STANDARD PLAN -->
                    <li class="contents">
                        <div
                            class="relative flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border-2 border-light dark:border-dark shadow-md xl:p-8 dark:bg-[#171717] dark:text-white">
                            <div
                                class="absolute top-0 left-0 bg-red-500 text-white text-xs px-3 py-1 rounded-br-lg font-semibold">
                                LIMITED TIME OFFER
                            </div>
                            <!-- RECOMMENDED Ribbon -->
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
                            <div class="my-8 flex items-center space-x-3">
                                <span class="line-through text-2xl text-gray-400">£160</span>
                                <span class="text-4xl font-extrabold text-light dark:text-dark">£96</span>
                                <span>/month</span>
                            </div>
                            <ul class="mb-8 space-y-4 text-left">
                                <li>✔ 3 Sessions per Week</li>
                                <li>✔ Small Group Sessions (Max 4 Students)</li>
                                <li>✔ Exam-style Questions & Feedback</li>
                                <li>✔ Chat & Email Support</li>
                                <li>✔ Monthly Performance Reviews</li>
                            </ul>
                            <a href="#"
                                class="text-xl text-light font-semibold rounded-lg px-5 py-3 text-center border-2 border-light dark:border-dark hover:bg-light dark:hover:bg-dark hover:text-white transition-all duration-500 calendly-popup"
                                onclick="Calendly.initPopupWidget({url: 'https://calendly.com/your-link'});return false;">
                                Book Now
                            </a>
                        </div>
                    </li>

                    <!-- KS3 PREMIUM PLAN -->
                    <li class="contents">
                        <div
                            class="relative flex flex-col p-6 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-md dark:border-gray-600 xl:p-8 dark:bg-[#171717] dark:text-white">
                            <div
                                class="absolute top-0 left-0 bg-red-500 text-white text-xs px-3 py-1 rounded-br-lg font-semibold">
                                LIMITED TIME OFFER
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">KS3 Premium Plan</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 max-w-[90%]">
                                Comprehensive one-on-one GCSE preparation.
                            </p>
                            <div class="my-8 flex items-center space-x-3">
                                <span class="line-through text-2xl text-gray-400">£400</span>
                                <span class="text-4xl font-extrabold text-light dark:text-dark">£240</span>
                                <span>/month</span>
                            </div>
                            <ul class="mb-8 space-y-4 text-left">
                                <li>✔ 4 Sessions per Week</li>
                                <li>✔ One-on-One Subject-Specific Tutoring</li>
                                <li>✔ Full GCSE Prep with Past Papers</li>
                                <li>✔ Personalised Study Tracker</li>
                                <li>✔ 24/7 Tutor Support</li>
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
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Special Back to School Offer</h2>
                <p><strong>Group Sessions:</strong> Originally <s>£110/month</s> — <strong>Now 40% OFF: Just
                        £60/month</strong>!</p>
                <p><strong>One-on-One Sessions:</strong> Also available. Visit our <a
                        href="https://tutor.olaarowolo.com/pricing" class="text-blue-600 underline">pricing page</a> for
                    full details.</p>
                <p class="mt-2">Now is the best time to enrol your child and get them ready for a confident return to
                    school.</p>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">What You'll Get</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Structured Curriculum:</strong> Aligned with national standards and exam boards</li>
                    <li><strong>Practice Worksheets:</strong> Weekly downloadable resources for revision</li>
                    <li><strong>Feedback & Reports:</strong> Monthly progress summaries shared with parents</li>
                </ul>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Register Today</h2>
                <p>Take advantage of our Back to School promotion. Limited spaces available!</p>
                <a href="/backtoschool#register"
                    class="inline-block mt-4 px-6 py-3 bg-blue-600 text-white rounded-lg font-bold hover:bg-blue-700 transition">Register
                    Now</a>
            </section>
        </main>





        <!-- KS3 PRICING END -->





    </section>

    <!-- Countdown Timer Script -->
    <script>
        function startKS2Countdown(endDateStr) {
            const countdownEl = document.getElementById("ks2-countdown");
            const endDate = new Date(endDateStr).getTime();

            function updateCountdown() {
                const now = new Date().getTime();
                const distance = endDate - now;

                if (distance < 0) {
                    countdownEl.innerHTML = "Offer expired!";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownEl.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        }

        // Set your offer end date and time below (Year-Month-DayTHour:Minute:Second)
        startKS2Countdown("2025-04-30T23:59:59");
    </script>



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

        "use strict";

        // TOGGLE DARK
        const sunIcon = document.getElementById("sunIcon"),
            moonIcon = document.getElementById("moonIcon"),
            userTheme = localStorage.getItem("theme"),
            toggleBtn = document.getElementById("light__to--dark");

        // TOGGLING BTN ACTIVE CLASS
        const btnToggle = () => {
            moonIcon.classList.toggle("hidden");
            sunIcon.classList.toggle("hidden");
        };

        // CHECKING SYSTEM & LOCALSTORAGE THEME
        const themeCheck = () => {
            if (userTheme === "dark") {
                document.documentElement.classList.add("dark");
                moonIcon.classList.add("hidden");
                return;
            }
            sunIcon.classList.add("hidden");
        };

        // SWITCHING THEME CONDITIONALLY
        const themeSwitch = () => {
            if (document.documentElement.classList.contains("dark")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("theme", "light");
                btnToggle();
                return;
            }
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme", "dark");
            btnToggle();
        };

        // MANUALLY SWITCHING THEME
        toggleBtn.addEventListener("click", themeSwitch);

        // WINDOW RELOAD THEME CHECK
        themeCheck();
        // TOGGLE DARK
    </script>


    <style>
        *,
        ::before,
        ::after {
            box-sizing: border-box;
            /* 1 */
            border-width: 0;
            /* 2 */
            border-style: solid;
            /* 2 */
            border-color: #e5e7eb;
            /* 2 */
        }

        ::before,
        ::after {
            --tw-content: "";
        }

        /*
        1. Use a consistent sensible line-height in all browsers.
        2. Prevent adjustments of font size after orientation changes in iOS.
        3. Use a more readable tab size.
        4. Use the user's configured `sans` font-family by default.
        5. Use the user's configured `sans` font-feature-settings by default.
        6. Use the user's configured `sans` font-variation-settings by default.
        */

        html {
            line-height: 1.5;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
            -moz-tab-size: 4;
            /* 3 */
            -o-tab-size: 4;
            tab-size: 4;
            /* 3 */
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
                "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* 4 */
            font-feature-settings: normal;
            /* 5 */
            font-variation-settings: normal;
            /* 6 */
        }

        /*
        1. Remove the margin in all browsers.
        2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
        */

        body {
            margin: 0;
            /* 1 */
            line-height: inherit;
            /* 2 */
        }

        /*
        1. Add the correct height in Firefox.
        2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
        3. Ensure horizontal rules are visible by default.
        */

        hr {
            height: 0;
            /* 1 */
            color: inherit;
            /* 2 */
            border-top-width: 1px;
            /* 3 */
        }

        /*
        Add the correct text decoration in Chrome, Edge, and Safari.
        */

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        /*
        Remove the default font size and weight for headings.
        */

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        /*
        Reset links to optimize for opt-in styling instead of opt-out.
        */

        a {
            color: inherit;
            text-decoration: inherit;
        }

        /*
        Add the correct font weight in Edge and Safari.
        */

        b,
        strong {
            font-weight: bolder;
        }

        /*
        1. Use the user's configured `mono` font family by default.
        2. Correct the odd `em` font sizing in all browsers.
        */

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
                "Liberation Mono", "Courier New", monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
        }

        /*
        Add the correct font size in all browsers.
        */

        small {
            font-size: 80%;
        }

        /*
        Prevent `sub` and `sup` elements from affecting the line height in all browsers.
        */

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /*
        1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
        2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
        3. Remove gaps between table borders by default.
        */

        table {
            text-indent: 0;
            /* 1 */
            border-color: inherit;
            /* 2 */
            border-collapse: collapse;
            /* 3 */
        }

        /*
        1. Change the font styles in all browsers.
        2. Remove the margin in Firefox and Safari.
        3. Remove default padding in all browsers.
        */

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            /* 1 */
            font-feature-settings: inherit;
            /* 1 */
            font-variation-settings: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            font-weight: inherit;
            /* 1 */
            line-height: inherit;
            /* 1 */
            color: inherit;
            /* 1 */
            margin: 0;
            /* 2 */
            padding: 0;
            /* 3 */
        }

        /*
        Remove the inheritance of text transform in Edge and Firefox.
        */

        button,
        select {
            text-transform: none;
        }

        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Remove default button styles.
        */

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
            /* 1 */
            background-color: transparent;
            /* 2 */
            background-image: none;
            /* 2 */
        }

        /*
        Use the modern Firefox focus style for all focusable elements.
        */

        :-moz-focusring {
            outline: auto;
        }

        /*
        Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
        */

        :-moz-ui-invalid {
            box-shadow: none;
        }

        /*
        Add the correct vertical alignment in Chrome and Firefox.
        */

        progress {
            vertical-align: baseline;
        }

        /*
        Correct the cursor style of increment and decrement buttons in Safari.
        */

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        /*
        1. Correct the odd appearance in Chrome and Safari.
        2. Correct the outline style in Safari.
        */

        [type="search"] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        /*
        Remove the inner padding in Chrome and Safari on macOS.
        */

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Change font properties to `inherit` in Safari.
        */

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        /*
        Add the correct display in Chrome and Safari.
        */

        summary {
            display: list-item;
        }

        /*
        Removes the default spacing and border for appropriate elements.
        */

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /*
        Reset default styling for dialogs.
        */

        dialog {
            padding: 0;
        }

        /*
        Prevent resizing textareas horizontally by default.
        */

        textarea {
            resize: vertical;
        }

        /*
        1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
        2. Set the default placeholder color to the user's configured gray 400 color.
        */

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }

        /*
        Set the default cursor for buttons.
        */

        button,
        [role="button"] {
            cursor: pointer;
        }

        /*
        Make sure disabled buttons don't get the pointer cursor.
        */

        :disabled {
            cursor: default;
        }

        /*
        1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
        2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
           This can trigger a poorly considered lint error in some tools but is included by design.
        */

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            /* 1 */
            vertical-align: middle;
            /* 2 */
        }

        /*
        Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
        */

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        /* Make elements with the HTML hidden attribute stay hidden by default */

        [hidden] {
            display: none;
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 1.5rem;
            padding-left: 1.5rem;
        }

        @media (min-width: 640px) {
            .container {
                max-width: 640px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 768px;
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1280px) {
            .container {
                max-width: 1280px;
            }
        }

        @media (min-width: 1536px) {
            .container {
                max-width: 1536px;
            }
        }

        .fixed {
            position: fixed;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .-right-14 {
            right: -3.5rem;
        }

        .-right-2 {
            right: -0.5rem;
        }

        .-top-2 {
            top: -0.5rem;
        }

        .right-0 {
            right: 0px;
        }

        .top-\[12\%\] {
            top: 12%;
        }

        .top-\[43px\] {
            top: 43px;
        }

        .z-50 {
            z-index: 50;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .my-8 {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .mb-10 {
            margin-bottom: 2.5rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .mt-auto {
            margin-top: auto;
        }

        .flex {
            display: flex;
        }

        .grid {
            display: grid;
        }

        .contents {
            display: contents;
        }

        .hidden {
            display: none;
        }

        .h-40 {
            height: 10rem;
        }

        .h-\[50px\] {
            height: 50px;
        }

        .w-40 {
            width: 10rem;
        }

        .w-60 {
            width: 15rem;
        }

        .w-\[50px\] {
            width: 50px;
        }

        .max-w-3xl {
            max-width: 48rem;
        }

        .max-w-\[90\%\] {
            max-width: 90%;
        }

        .translate-y-\[-12\%\] {
            --tw-translate-y: -12%;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .-rotate-\[20deg\] {
            --tw-rotate: -20deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .rotate-45 {
            --tw-rotate: 45deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .flex-col {
            flex-direction: column;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .gap-8 {
            gap: 2rem;
        }

        .space-x-3> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.75rem * var(--tw-space-x-reverse));
            margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-y-4> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse));
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .rounded-l-lg {
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        .border {
            border-width: 1px;
        }

        .border-2 {
            border-width: 2px;
        }

        .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
        }

        .border-light {
            --tw-border-opacity: 1;
            border-color: rgb(26 16 60 / var(--tw-border-opacity));
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
        }

        .bg-light {
            --tw-bg-opacity: 1;
            background-color: rgb(26 16 60 / var(--tw-bg-opacity));
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .p-6 {
            padding: 1.5rem;
        }

        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .py-2\.5 {
            padding-top: 0.625rem;
            padding-bottom: 0.625rem;
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }

        .text-5xl {
            font-size: 3rem;
            line-height: 1;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .font-extrabold {
            font-weight: 800;
        }

        .font-light {
            font-weight: 300;
        }

        .font-normal {
            font-weight: 400;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
        }

        .text-light {
            --tw-text-opacity: 1;
            color: rgb(26 16 60 / var(--tw-text-opacity));
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color),
                0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .duration-500 {
            transition-duration: 500ms;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        .before\:absolute::before {
            content: var(--tw-content);
            position: absolute;
        }

        .before\:left-0::before {
            content: var(--tw-content);
            left: 0px;
        }

        .before\:top-0::before {
            content: var(--tw-content);
            top: 0px;
        }

        .before\:border-4::before {
            content: var(--tw-content);
            border-width: 4px;
        }

        .before\:border-light::before {
            content: var(--tw-content);
            --tw-border-opacity: 1;
            border-color: rgb(26 16 60 / var(--tw-border-opacity));
        }

        .after\:absolute::after {
            content: var(--tw-content);
            position: absolute;
        }

        .after\:bottom-0::after {
            content: var(--tw-content);
            bottom: 0px;
        }

        .after\:right-0::after {
            content: var(--tw-content);
            right: 0px;
        }

        .after\:border-4::after {
            content: var(--tw-content);
            border-width: 4px;
        }

        .after\:border-light::after {
            content: var(--tw-content);
            --tw-border-opacity: 1;
            border-color: rgb(26 16 60 / var(--tw-border-opacity));
        }

        .hover\:bg-light:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(26 16 60 / var(--tw-bg-opacity));
        }

        .hover\:text-white:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:border-dark) {
            --tw-border-opacity: 1;
            border-color: rgb(0 167 142 / var(--tw-border-opacity));
        }

        :is(.dark .dark\:border-gray-600) {
            --tw-border-opacity: 1;
            border-color: rgb(75 85 99 / var(--tw-border-opacity));
        }

        :is(.dark .dark\:bg-\[\#171717\]) {
            --tw-bg-opacity: 1;
            background-color: rgb(23 23 23 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:bg-black) {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:bg-dark) {
            --tw-bg-opacity: 1;
            background-color: rgb(0 167 142 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:text-dark) {
            --tw-text-opacity: 1;
            color: rgb(0 167 142 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:text-gray-300) {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:text-gray-400) {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:text-white) {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:before\:border-dark)::before {
            content: var(--tw-content);
            --tw-border-opacity: 1;
            border-color: rgb(0 167 142 / var(--tw-border-opacity));
        }

        :is(.dark .dark\:after\:border-dark)::after {
            content: var(--tw-content);
            --tw-border-opacity: 1;
            border-color: rgb(0 167 142 / var(--tw-border-opacity));
        }

        :is(.dark .dark\:hover\:bg-dark:hover) {
            --tw-bg-opacity: 1;
            background-color: rgb(0 167 142 / var(--tw-bg-opacity));
        }

        @media (min-width: 640px) {
            .sm\:text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .md\:py-24 {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }

            .md\:text-5xl {
                font-size: 3rem;
                line-height: 1;
            }

            .md\:text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
        }

        @media (min-width: 1024px) {
            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (min-width: 1280px) {
            .xl\:p-8 {
                padding: 2rem;
            }
        }
    </style>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const paypalUrl = 'https://www.paypal.com/paypalme/olasunkanmiarowolo?country.x=GB&locale.x=en_GB';
        const bookNowButtons = document.querySelectorAll('a');

        bookNowButtons.forEach(button => {
            if (button.textContent.trim() === 'Book Now') {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    window.open(paypalUrl, 'paypalPopup', 'width=600,height=700,scrollbars=yes');
                });
            }
        });
