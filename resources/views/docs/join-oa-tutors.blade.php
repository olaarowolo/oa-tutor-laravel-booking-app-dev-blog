@extends('layouts.app')
@include('components.head')
@section('title', 'Become an OA Tutor')
@section('meta_description', 'Join OA Tutors as a passionate and flexible tutor. Apply now to make a difference in
    students\' lives with online or in-person tutoring opportunities.')
@section('meta_keywords', 'OA Tutors, tutor application, education jobs, online tutoring, in-person tutoring, flexible
    schedule, tutoring opportunities, academic tutoring')

@section('content')
    @include('partials.blog.profile')
    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap ">
                <main class="max-w-5xl w-full">
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
                    <h2 class="text-2xl font-bold mb-4">Tutor with Us</h2>
                    <p>Interested in tutoring? Learn about available positions and the simple application process on our
                        website.</p>
                    <button id="showFormBtn"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                        Apply Now
                    </button>
                    <form id="tutorApplicationForm" class="hidden mt-6 bg-gray-100 p-6 rounded shadow-md"
                        enctype="multipart/form-data" method="POST" action="{{ route('tutor.submit') }}">
                        @csrf
                        <h3 class="text-xl font-semibold mb-4">Become an OA Tutor</h3>
                        <p class="mb-6">Thank you for your interest in joining OA Tutors! Please fill out the following
                            information to help us learn more about you.</p>

                        <div class="mb-4">
                            <label for="email" class="block font-medium mb-1">Email Address <span
                                    class="text-red-600">*</span></label>
                            <input type="email" id="email" name="email" required
                                class="w-full border border-gray-300 rounded px-3 py-2" />
                        </div>

                        <div class="mb-4">
                            <label for="full_name" class="block font-medium mb-1">Full Name <span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="full_name" name="full_name" required
                                class="w-full border border-gray-300 rounded px-3 py-2" />
                        </div>

                        <div class="mb-4">
                            <p class="font-medium mb-1">Are you passionate about education? <span
                                    class="text-red-600">*</span></p>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="passionate_education" value="Yes" required
                                    class="form-radio" />
                                <span class="ml-2">Yes</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="passionate_education" value="No" required
                                    class="form-radio" />
                                <span class="ml-2">No</span>
                            </label>
                        </div>

                        <div class="mb-4">
                            <p class="font-medium mb-1">Do you have a flexible schedule? <span class="text-red-600">*</span>
                            </p>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="flexible_schedule" value="Yes" required class="form-radio" />
                                <span class="ml-2">Yes</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="flexible_schedule" value="No" required class="form-radio" />
                                <span class="ml-2">No</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="flexible_schedule" value="Somewhat" required
                                    class="form-radio" />
                                <span class="ml-2">Somewhat</span>
                            </label>
                        </div>

                        <div class="mb-4">
                            <p class="font-medium mb-1">Are you interested in tutoring online or in-person? <span
                                    class="text-red-600">*</span></p>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="tutoring_preference" value="Online only" required
                                    class="form-radio" />
                                <span class="ml-2">Online only</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="tutoring_preference" value="In-person only" required
                                    class="form-radio" />
                                <span class="ml-2">In-person only</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="tutoring_preference" value="Both online and in-person" required
                                    class="form-radio" />
                                <span class="ml-2">Both online and in-person</span>
                            </label>
                        </div>

                        <div class="mb-4">
                            <label for="passion_description" class="block font-medium mb-1">Please describe your passion for
                                education and your academic background. <span class="text-red-600">*</span></label>
                            <textarea id="passion_description" name="passion_description" required rows="4"
                                class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="subjects_proficient" class="block font-medium mb-1">What subjects are you
                                proficient in tutoring? <span class="text-red-600">*</span></label>
                            <input type="text" id="subjects_proficient" name="subjects_proficient" required
                                class="w-full border border-gray-300 rounded px-3 py-2" />
                        </div>

                        <div class="mb-4">
                            <label for="age_groups" class="block font-medium mb-1">What age groups and learning styles are
                                you comfortable working with?</label>
                            <textarea id="age_groups" name="age_groups" rows="3" class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="communication_skills" class="block font-medium mb-1">Please describe your
                                effective communication skills.</label>
                            <textarea id="communication_skills" name="communication_skills" rows="3"
                                class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="reliability" class="block font-medium mb-1">Please describe your reliability,
                                organization, and professionalism.</label>
                            <textarea id="reliability" name="reliability" rows="3"
                                class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="resume" class="block font-medium mb-1">Please upload your resume/CV
                                (optional).</label>
                            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx"
                                class="w-full" />
                        </div>

                        <div class="mb-4">
                            <label for="additional_info" class="block font-medium mb-1">Is there anything else you'd like
                                us to know?</label>
                            <textarea id="additional_info" name="additional_info" rows="3"
                                class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="availability" class="block font-medium mb-1">Please specify your availability
                                (days and times).</label>
                            <input type="text" id="availability" name="availability"
                                class="w-full border border-gray-300 rounded px-3 py-2" />
                        </div>

                        <div class="mb-4">
                            <p class="font-medium mb-1">Highest level of education completed:</p>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="education_level" value="High School" class="form-radio" />
                                <span class="ml-2">High School</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="education_level" value="Associate Degree"
                                    class="form-radio" />
                                <span class="ml-2">Associate Degree</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="education_level" value="Bachelor's Degree"
                                    class="form-radio" />
                                <span class="ml-2">Bachelor's Degree</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="education_level" value="Master's Degree"
                                    class="form-radio" />
                                <span class="ml-2">Master's Degree</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="education_level" value="Doctorate" class="form-radio" />
                                <span class="ml-2">Doctorate</span>
                            </label>
                        </div>

                        <div class="mb-4">
                            <label for="prior_experience" class="block font-medium mb-1">Please describe any prior
                                tutoring experience.</label>
                            <input type="text" id="prior_experience" name="prior_experience"
                                class="w-full border border-gray-300 rounded px-3 py-2" />
                        </div>

                        <button type="submit"
                            class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-6 rounded">
                            Apply Now
                        </button>
                    </form>

                    <p class="mt-4">Don't forget to check out our "Our Policies" section to learn more about our
                        commitment to providing a high-quality learning experience for all students.</p>
                    {{-- <a href="{{ route('our-policies') }}" class="text-blue-500 hover:underline">Our Policies</a> --}}
                </main>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('showFormBtn').addEventListener('click', function() {
            var form = document.getElementById('tutorApplicationForm');
            if (form.classList.contains('hidden')) {
                form.classList.remove('hidden');
                this.textContent = 'Hide Application Form';
            } else {
                form.classList.add('hidden');
                this.textContent = 'Apply Now';
            }
        });
    </script>
@endsection
