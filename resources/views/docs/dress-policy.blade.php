@extends('layouts.app')

@include('components.head')

@section('title', 'Booking Policy')

@section('content')
    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="services">
        <main class="max-w-4xl w-full">

            <section class="mb-8">

                <h2 class="text-2xl font-bold mb-4">OA Tutors Tuition Dress Policy <a class="fa fa-download" aria-hidden="true"
                        href="/assets/docs/oa-tutor-booking-policy.pdf" target="_blank"> </a> </h2>

                <p>
                    Dress Policy Starts
                </p>

                <h2 class="text-2xl font-bold mb-4">1. Item One</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>List 1.</li>
                    <li>List 2.</li>
                    <li>List 3.</li>

                </ul>


                <div>
                    <p class="text-2xl font-bold mb-4">Download to sign
                        <a class="fa fa-download" aria-hidden="true" href="assets/docs/oa-tutor-dressing-policy.pdf"
                            target="_blank">
                        </a>
                    </p>
                </div>


            </section>
        </main>
    </section>
@endsection
