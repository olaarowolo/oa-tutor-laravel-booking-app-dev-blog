@extends('layouts.app')
@include('components.head')
@include('partials.navbar')
@section('title', 'Coding for Kids')
@include('components.slider')
@section('content')
    <section class="container px-5 py-24 mx-auto flex flex-wrap items-center justify-center" id="services">
        <main class="max-w-5xl w-full">
            <div
                style="text-align: center; font-family: 'Courier New', Courier, monospace; background-color: #1e1e1e; color: #dcdcdc; padding: 20px; border-radius: 8px;">
                <b>This is an opportunity to ignite your child&#39;s love for coding!</b><br />
                <br />
                <i>Transform your child into a tech superhero with our exciting coding classes!</i>
            </div>
            &nbsp;
            <section class="mb-8"
                style="font-family: 'Courier New', Courier, monospace; background-color: #1e1e1e; color: #dcdcdc; padding: 20px; border-radius: 8px;">
                <ul class="list-disc pl-6 space-y-2">
                    <li><b>Certifications:</b> <i>Gain expert credentials.</i></li>
                    <li><b>Flexible Schedules:</b> <i>Learn at your child&#39;s pace.</i></li>
                    <li><b>Competition Prep:</b> <i>Ace school competitions.</i></li>
                    <li><b>For Ages 6-16:</b> <i>Tailored learning experiences.</i></li>
                </ul>
            </section>
            <section class="mb-8"
                style="text-align: center; font-family: 'Courier New', Courier, monospace; background-color: #1e1e1e; color: #dcdcdc; padding: 20px; border-radius: 8px; font-size: 10px;">
                <p><b>Ready to Get Started?</b><br />
                    <a href=""
                        onclick="Calendly.initPopupWidget({url: 'https://calendly.com/olaarowolo/personal-tutor'});return false;"
                        style="color: #4da6ff;" target="_blank">Claim your child’s free trial class now!</a>
                </p>
                &nbsp;
                <p><i>Laptop or desktop required.</i></p>
                <p><b><a href=""
                            onclick="Calendly.initPopupWidget({url: 'https://calendly.com/olaarowolo/personal-tutor'});return false;"
                            style="color: #4da6ff;" target="_blank">Book the Free Trial Class and Begin the
                            Journey!</a></b></p>
            </section>
        </main>
    </section>


    </main>
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
