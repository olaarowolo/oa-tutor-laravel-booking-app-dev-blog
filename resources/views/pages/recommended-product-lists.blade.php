@extends('layouts.app')
@section('title', 'OA Tutors')
@include('components.head')

@include('partials.header')
@section('content')

    <style>
        /* Additional or overriding styles for this page */


        .products {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .product {
            margin-bottom: 20px;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        .product img {
            width: 120px;
            height: auto;
            object-fit: cover;
            float: left;
            margin-right: 20px;
        }

        .product-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .product-description {
            margin-bottom: 10px;
            color: var(--foreground-secondary);
            font-size: var(--fs-4);
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 3;
            margin-bottom: 1.2rem;
        }

        .product-link {
            background-color: #007bff;
            /* Use your preferred button color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            /* Allow text wrapping if button text is long */
        }

        .product-link:hover {
            background-color: #0069d9;
            /* Change button color on hover */
        }

        .product-image {
            width: 100px;
            height: 150px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }


        .show-more {
            display: none;
        }

        .show-more.show {
            display: inline;
        }

        .read-more {
            cursor: pointer;
        }
    </style>

    <script>
        // Get all elements with class 'read-more'
        const readMoreLinks = document.querySelectorAll('.read-more');

        // Add event listener to each 'Read more' link
        readMoreLinks.forEach((link) => {
            link.addEventListener('click', (e) => {
                // Prevent default link behavior
                e.preventDefault();

                // Get the sibling element with class 'show-more'
                const showMoreElement = link.previousElementSibling;

                // Toggle the 'show' class on the 'show-more' element
                showMoreElement.classList.toggle('show');

                // Update the link text
                if (showMoreElement.classList.contains('show')) {
                    link.textContent = 'Read less';
                } else {
                    link.textContent = 'Read more';
                }
            });
        });
    </script>

    <div class="main">
        <div class="container">
            <!-- Services Offered -->
            <section class="hero2 px-5 py-5 mx-auto flex flex-wrap items-center justify-center"
                class="text-gray-600 body-font" id="services">
                <div class="px-5 py-10 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <!-- SUBJECTS LISTS -->
                        {{-- <ul class="products">
                            <li class="product">
                                <img src="https://m.media-amazon.com/images/I/61rhw1pFlmL._SY466_.jpg"
                                    alt="Reception Handwriting Workbook" class="product-image" />
                                <h3 class="product-title">
                                    Reception Handwriting Targeted Practice Workbook: Ideal for use at
                                    home (Collins Early Years Practice)
                                </h3>
                                <p class="product-description">
                                    A comprehensive guide to handwriting practice for reception students.
                                </p>
                                <a href="https://amzn.to/41uTMhR" class="product-link">Buy this on Amazon</a>
                            </li>
                            <li class="product">
                                <img src="https://m.media-amazon.com/images/I/51Gt7iwgraL._SY445_SX342_.jpg"
                                    alt="Writing Workbook Ages 3-5" class="product-image" />

                                <h3 class="product-title">
                                    Writing Workbook Ages 3-5: Prepare for Preschool with easy home
                                    learning (Collins Easy Learning Preschool)
                                </h3>
                                <p class="product-description">
                                    A fun and interactive writing workbook for preschool students.
                                </p>
                                <a href="https://amzn.to/4gOSOBR" class="product-link">Buy this on Amazon</a>
                            </li>
                        </ul> --}}

                        <li class="product">
                            <img src="https://m.media-amazon.com/images/I/415V4B7S2gL._SY445_SX342_.jpg" alt=""
                                class="product-image" />


                            <button class="blog-topic text-tiny">Highly Recommended </button>
                            <h3 class="product-title blog-text">
                                Year 1 Handwriting Targeted Practice Workbook: Ideal for use at home
                                (Collins KS1 Practice)
                            </h3>

                            <div class="product-description ">
                                A comprehensive guide to handwriting practice for year 1 students.
                                <span class="show-more">
                                    The 11 Plus exam is designed to determine a child's
                                    suitability for grammar schools or other selective schools.
                                    <br> Pass the 11 Plus exam with the skills and attitudes that will take them
                                    further.
                                    </br>
                                </span>
                                {{-- <a href=" " class="read-more text-blue-500 hover:underline">Read more</a> --}}
                            </div>
                            {{-- <a href="https://amzn.to/41uTx6r" target="blank" class="product-link">Buy this on Amazon</a> --}}
                            <div>
                                <a href="https://amzn.to/41uTx6r" target="_blank" rel="noopener noreferrer"
                                    style="border:none;text-decoration:none"><img
                                        src="https://www.niftybuttons.com/amazon/amazon-button2.png"></a>
                            </div>

                        </li>

                        <h2>Books</h2>
                        <ul class="products">
                            <li class="product">
                                <img src="https://m.media-amazon.com/images/I/61rhw1pFlmL._SY466_.jpg"
                                    alt="Reception Handwriting Workbook" class="product-image" />
                                <button class="blog-topic text-tiny">Highly Recommended</button>
                                <h3 class="product-title blog-text">
                                    Reception Handwriting Targeted Practice Workbook: Ideal for use at home (Collins Early
                                    Years Practice)
                                </h3>
                                <div class="product-description">
                                    A comprehensive guide to handwriting practice for reception students.
                                    <span class="show-more"></span>
                                </div>
                                <div>
                                    <a href="https://amzn.to/41uTMhR" target="_blank" rel="noopener noreferrer"
                                        style="border:none;text-decoration:none">
                                        <img src="https://www.niftybuttons.com/amazon/amazon-button2.png">
                                    </a>
                                </div>
                            </li>
                            <li class="product">
                                <img src="https://m.media-amazon.com/images/I/51Gt7iwgraL._SY445_SX342_.jpg"
                                    alt="Writing Workbook Ages 3-5" class="product-image" />
                                <button class="blog-topic text-tiny">Highly Recommended</button>
                                <h3 class="product-title blog-text">
                                    Writing Workbook Ages 3-5: Prepare for Preschool with easy home learning (Collins Easy
                                    Learning Preschool)
                                </h3>
                                <div class="product-description">
                                    A fun and interactive writing workbook for preschool students.
                                    <span class="show-more"></span>
                                </div>
                                <div>
                                    <a href="https://amzn.to/4gOSOBR" target="_blank" rel="noopener noreferrer"
                                        style="border:none;text-decoration:none">
                                        <img src="https://www.niftybuttons.com/amazon/amazon-button2.png">
                                    </a>
                                </div>
                            </li>
                        </ul>

                        <ul class="products">
                            <li class="product">
                                <img src="https://m.media-amazon.com/images/I/415V4B7S2gL._SY445_SX342_.jpg" alt=""
                                    class="product-image" />
                                <button class="blog-topic text-tiny">Highly Recommended</button>
                                <h3 class="product-title blog-text">
                                    Year 1 Handwriting Targeted Practice Workbook: Ideal for use at home (Collins KS1
                                    Practice)
                                </h3>
                                <div class="product-description">
                                    A comprehensive guide to handwriting practice for year 1 students.
                                    <span class="show-more"></span>
                                </div>
                                <div>
                                    <a href="https://amzn.to/41uTx6r" target="_blank" rel="noopener noreferrer"
                                        style="border:none;text-decoration:none">
                                        <img src="https://www.niftybuttons.com/amazon/amazon-button2.png">
                                    </a>
                                </div>
                            </li>
                            <li class="product">
                                <img src="https://m.media-amazon.com/images/I/61gH8JN3mVL._AC_SX679_.jpg" alt=""
                                    class="product-image" />
                                <button class="blog-topic text-tiny">Highly Recommended</button>
                                <h3 class="product-title blog-text">
                                    Coogam Uppercase Lowercase Magnetic Letters and Numbers for Children Math Symbols A-Z
                                    Alphabet Fridge Magnets Best Educational Toy for Preschool Learning Spelling Counting
                                    (78 Pcs)
                                </h3>
                                <div class="product-description">
                                    A fun and interactive magnetic letter set for preschool students.
                                    <span class="show-more"></span>
                                </div>
                                <div>
                                    <a href="https://amzn.to/49GhRV9" target="_blank" rel="noopener noreferrer"
                                        style="border:none;text-decoration:none">
                                        <img src="https://www.niftybuttons.com/amazon/amazon-button2.png">
                                    </a>
                                </div>
                            </li>
                            <li class="product">
                                <img src="https://m.media-amazon.com/images/I/41-9yEwLyMS._AC_SX679_.jpg" alt=""
                                    class="product-image" width="80%" />
                                <button class="blog-topic text-tiny">Highly Recommended</button>
                                <h3 class="product-title blog-text">
                                    Esselte, Number 1 Power, A4, Lever Arch File, 75 mm Spine, 500 sheets Capacity, PP,
                                    Plastic Cover, File Folder, 811313, Fuchsia
                                </h3>
                                <div class="product-description">
                                    A high-quality lever arch file for organizing school work.
                                    <span class="show-more"></span>
                                </div>
                                <div>
                                    <a href="https://amzn.to/3ZyYN6t" target="_blank" rel="noopener noreferrer"
                                        style="border:none;text-decoration:none">
                                        <img src="https://www.niftybuttons.com/amazon/amazon-button2.png">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!--  END OF SUBJECTS LISTS -->
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

    </div>
@endsection
