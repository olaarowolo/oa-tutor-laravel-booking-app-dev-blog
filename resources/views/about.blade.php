@extends('layouts.app')
@include('components.head')
@include('partials.header')
@section('title', 'About OA Tutors')
@section('content')
    <div class="main">
        <div class="container">


            <section class="hero2 px-5 py-5 mx-auto items-center justify-center"
                class="text-gray-600 body-font" id="services">
                <div class="px-5 py-24 mx-auto">


                   
                    <div class="">
                        <h2 class="h2 title-font font-medium text-3xl mb-4 text-gray-900">About Us</h2>
                        <p>Welcome to OA Tutors!</p>
                        <p>At OA Tutors, we believe that education is the cornerstone of a successful future. Our mission is to empower students through personalised learning experiences that cater to their unique needs and learning styles.</p>

                        <h3 class="h3 mt-6">Who We Are</h3>
                        <p>Founded by a team of passionate educators and lifelong learners, OA Tutors was established with the vision of making quality education accessible to all. We are dedicated to providing a supportive and enriching environment where students can thrive academically and personally.</p>

                        <h3 class="h3 mt-6">Our Values</h3>
                        <ul class="list-disc list-inside">
                            <li><strong>Integrity:</strong> We uphold the highest standards of honesty and transparency in all our interactions.</li>
                            <li><strong>Empowerment:</strong> We believe in empowering our students with the knowledge and skills they need to succeed.</li>
                            <li><strong>Innovation:</strong> We embrace innovative teaching methods and technologies to enhance the learning experience.</li>
                            <li><strong>Community:</strong> We foster a sense of community among students, tutors, and parents, encouraging collaboration and support.</li>
                        </ul>

                        <h3 class="h3 mt-6">Our Approach</h3>
                        <p>At OA Tutors, we understand that every student is unique. Our approach is tailored to meet the individual needs of each learner. We offer a wide range of tutoring services, from one-on-one sessions to group classes, covering various subjects and grade levels. Our experienced tutors utilise a mix of traditional and modern teaching techniques to ensure that learning is both effective and enjoyable.</p>

                        <h3 class="h3 mt-6">Our Team</h3>
                        <p>Our team of dedicated tutors is composed of qualified professionals with diverse backgrounds in education. Each tutor is committed to helping students reach their full potential, providing guidance, support, and encouragement every step of the way.</p>

                        <h3 class="h3 mt-6">Our Impact</h3>
                        <p>We take pride in the positive impact we have on our students' lives. Many of our students have achieved remarkable academic success, gained confidence in their abilities, and developed a love for learning that extends beyond the classroom.</p>

                        <h3 class="h3 mt-6">Join Us</h3>
                        <p>Whether you are a student seeking academic support or a parent looking for the best educational resources for your child, we invite you to join the OA Tutors family. Together, we can unlock the doors to a brighter future.</p>

                        <p>For more information about our services or to schedule a consultation, please <a href="mailto:tutor@olaarowolo.com" class="text-blue-500 underline">contact us</a>.</p>

                        <p>Thank you for considering OA Tutors as your educational partner!</p>
                    </div>

            </section>

            <div class="aside">
                <div class="topics">
                    <h2 class="h2">Recent Blog Posts</h2>
                    <a href="#" class="topic-btn">
                        <div class="icon-box">
                            <ion-icon name="server-outline"></ion-icon>
                        </div>
                        <p>Retentive Memory</p>
                    </a>
                    <a href="#" class="topic-btn">
                        <div class="icon-box">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </div>
                        <p>Learning Gamified</p>
                    </a>
                    <a href="#" class="topic-btn">
                        <div class="icon-box">
                            <ion-icon name="rocket-outline"></ion-icon>
                        </div>
                        <p>Flying Colours</p>
                    </a>
                </div>
                <div class="tags">
                    <h2 class="h2">Quote of the day</h2>
                    <div class="wrapper">
                        <p> <b>The illiterate of the 21st century will not be those who cannot read and write, but those who
                                cannot
                                learn, unlearn, and relearn.</b> - Alvin Toffler

                        </p>
                        <button class="hashtag">#quote</button>

                    </div>
                </div>
                <div class="contact">
                    <h2 class="h2">Let's Talk</h2>
                    <div class="wrapper">
                        <p>
                            Do you want to learn more about how we can help you? <br>
                            Send us a message and we'll get back to you as soon as possible.
                        </p>
                        <ul class="social-link">

                            {{-- <li>
                        <a href="https://x.com/olaaarowolo" class="icon-box twitter">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li> --}}

                            <li>
                                <a href="mailto:tutor@olaarowolo.com" class="icon-box email">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/447487397751" class="icon-box whatsapp">
                                    <ion-icon name="logo-whatsapp"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="tel:+447487397751" class="icon-box phone">
                                    <ion-icon name="call-outline"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/olasunkanmi-arowolo-5619a165/"
                                    class="icon-box linkedin">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>


                        </ul>

                    </div>
                </div>
                {{-- <div class="newsletter">
            <h2 class="h2">Newsletter</h2>
            <div class="wrapper">
                <p>
                    Subscribe to our newsletter to be among the first to keep up with the latest updates.
                </p>
                <form action="#">
                    <input type="email" name="email" placeholder="Email Address" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div> --}}

                <div class="newsletter">
                    <h2 class="h2">Newsletter</h2>
                    <div class="wrapper">
                        <p>
                            Subscribe to our newsletter to be among the first to keep up with the latest updates.
                        </p>
                        <form action="{{ route('newsletter.subscribe') }}" method="POST">
                            @csrf <!-- Laravel's CSRF protection -->
                            <input type="email" name="email" placeholder="Email Address" required>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                        @if (session('success'))
                            <p class="success">{{ session('success') }}</p>
                        @endif
                        @if ($errors->any())
                            <div class="error-messages">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

            </div>

        </div>

    @endsection
