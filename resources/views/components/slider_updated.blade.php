@php
    $imagePath = './assets/img/blog/default-img.jpg'; // Default image

    // Change image based on the current route
    switch (request()->route()->getName()) {
        case 'home':
            $imagePath = './assets/img/blog/home-img.jpg'; // Image for home page
            break;
        case 'key-stage-1':
            $imagePath = './assets/img/blog/ks1-img.jpg'; // Image for KS-1 page
            break;
        case 'key-stage-2':
            $imagePath = './assets/img/blog/ks2-img.jpg'; // Image for KS-2 page
            break;
        case 'key-stage-3':
            $imagePath = './assets/img/blog/ks3-img.jpg'; // Image for KS-3 page
            break;
        case 'eleven-plus':
            $imagePath = './assets/img/blog/11plus-img.jpg'; // Image for 11+ page
            break;
        case 'gcse':
            $imagePath = './assets/img/blog/gcse-img.jpg'; // Image for GCSE page
            break;
        default:
            $imagePath = './assets/img/blog/default-img.jpg'; // Fallback image
            break;
    }
@endphp

<div class="hero">
    <div class="container">
        <div class="left">
            <h1 class="h1">
                Hi there!, <br>
                You're welcome to  <br> <b>OA Tutors</b>
                <br> <span class="h2"> We're here to help you unlock your child's potential.</span>
            </h1>
            <p class="h3">
                with personalised  <abbr title="Accessibility">one-to-one and group lessons</abbr>
                We are offering you a one-stop path to success
            </p>
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Our services</a>
                <a href="#" class="btn btn-secondary">Contact</a>
            </div>
        </div>
        <div class="right">
            <div class="pattern-bg"></div>
            <div class="img-box">
                <img src="{{ asset($imagePath) }}" alt="OA Tutors Banner" class="hero-img">
                {{-- <div class="shape shape-1"></div> --}}
                {{-- <div class="shape shape-2"></div> --}}
            </div>
        </div>
