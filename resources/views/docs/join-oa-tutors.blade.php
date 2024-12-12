@extends('layouts.app')
@include('components.head')
@section('title', 'Become an OA Tutor')
@section('content')
    @include('partials.blog.profile')
    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap ">
                <main class="max-w-4xl w-full">
                    <h1 class="text-3xl font-bold mb-4">Become an OA Tutor: Make a Difference While You Work!</h1>
                    <p class="mb-4">Are you passionate about education and have a flexible schedule? OA Tutors is seeking
                        talented and enthusiastic tutors to join our team!</p>
                    <h2 class="text-2xl font-bold mb-4">Why Join OA Tutors?</h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Flexible Schedule: Work hours that fit your lifestyle.</li>
                        <li>Work from Anywhere: Tutor online or in-person.</li>
                        <li>Make a Difference: Impact students' lives and academic success.</li>
                    </ul>
                    <h2 id="tutor-requirements" class="text-2xl font-bold mb-4">What We're Looking For</h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Passion for education and strong academic background</li>
                        <li>Enjoy working with students of all ages and learning styles</li>
                        <li>Effective communication skills</li>
                        <li>Reliability, organization, and professionalism</li>
                    </ul>
                    <h2 class="text-2xl font-bold mb-4">Ready to Join Us?</h2>
                    <p>Visit our website or contact us today to learn more about available tutoring opportunities and how to
                        apply.</p>
                    {{-- <a href="{{ route('tutor-application') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Apply Now</a> --}}
                    <p class="mt-4">Don't forget to check out our "Our Policies" section to learn more about our
                        commitment to providing a high-quality learning experience for all students.</p>
                    {{-- <a href="{{ route('our-policies') }}" class="text-blue-500 hover:underline">Our Policies</a> --}}
                </main>
            </div>
        </div>
    </section>
@endsection
