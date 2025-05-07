@extends('layouts.app')
@include('components.head')
@include('partials.navbar')
@section('title', 'Key Stage 3 (KS3)')
@include('components.slider')
@section('content')
{{-- @include('components.backtoschool-slider') --}}
@include('partials.prices.ks3-pricing')
<section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="ks3">
        <main class="max-w-5xl w-full">
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">GCSE (KS-3)</h2>
                <p>At tutor.olaarowolo.com, I provide personalised Maths and English tuition designed to help your child
                    make
                    genuine progress and develop a love for learning. With tailored support and a strong commitment to each
                    student&#39;s success, I offer an engaging and effective learning experience.</p>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">What My Tuition Covers</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li><b>Core Maths and English Skills:</b> Tailored for children aged 4-14, my lessons are aligned with
                        the
                        school curriculum in England, Scotland, and Wales.</li>
                    <li><b>Personalised Curriculum:</b> I adapt the curriculum to meet your child&#39;s specific needs,
                        ensuring
                        they receive the appropriate level of support and challenge.</li>
                    <li><b>Flexible Learning:</b> Your child has 24/7 access to smart learning tools, allowing them to learn
                        at
                        their own pace outside of our sessions.</li>
                    <li><b>Regular Progress Updates:</b> I provide consistent progress reports and hold meetings with you to
                        discuss your child&#39;s achievements and areas for improvement.</li>
                    <li><b>Interactive Lessons &amp; Resources:</b> My virtual lessons and downloadable activity sheets are
                        designed to make learning both enjoyable and effective.</li>
                </ul>
            </section>
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Developing Skills for the Future</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li><b>Maths:</b> From basic addition to advanced topics like algebra, I cover all essential areas to
                        build
                        strong mathematical foundations.</li>
                    <li><b>English:</b> Whether your child is just beginning to read or analysing literature, my tuition
                        supports their literacy development at every stage.</li>
                    <li><b>Phonics:</b> I help younger learners develop early reading skills with confidence and fluency.
                    </li>
                    <li><b>SATs Preparation:</b> I offer focused support to help your child excel in key exams, ensuring
                        they
                        are well-prepared for SATs.</li>
                </ul>
            </section>
        </main>
    </section>
@endsection
