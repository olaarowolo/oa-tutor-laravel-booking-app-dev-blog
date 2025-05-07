@extends('layouts.app')
@include('components.head')
@include('partials.navbar')
@include('components.slider')
@section('content')
    <div class="main">
        <div class="container">
            <div class="blog">
                <h2 class="h2">Latest Blog Posts</h2>
                <div class="blog-card-group">
                    @foreach ($posts as $index => $post)
                    <div class="blog-card" @if($index >= 4) style="display:none;" @endif>
                        <div class="blog-card-banner">
                            <img src="{{ $post['image'] ?? './assets/img/blog/blog-1.png' }}" alt="{{ $post['title'] }}" width="250" class="blog-banner-img">
                        </div>
                        <div class="blog-content-wrapper">
                            <button class="blog-topic text-tiny">{{ $post['category'] ?? 'Blog' }}</button>
                            <h3>
<a href="{{ route('blog.show', $post['id']) }}" class="h3">{{ $post['title'] }}</a>
                            </h3>
                            <p class="blog-text">
                                {{ $post['excerpt'] }}
                            </p>
                            <div class="wrapper-flex">
                                <div class="profile-wrapper">
                                    <img src="./assets/img/blog/author.png" alt="{{ $post['author'] ?? 'Author' }}" width="50">
                                </div>
                                <div class="wrapper">
                                    <a href="#" class="h4">{{ $post['author'] ?? 'OA Tutor Team' }}</a>
                                    <p class="text-sm">
                                        <time datetime="{{ $post['published_at'] }}">{{ \Carbon\Carbon::parse($post['published_at'])->format('M d, Y') }}</time>
                                        <span class="separator"></span>
                                        <ion-icon name="time-outline"></ion-icon>
                                        <time datetime="PT3M">3 min</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="btn load-more">Load More</button>
            </div>

            <div class="aside">
                <div class="topics">
                    <h2 class="h2">Recent Blog Posts</h2>
                    @foreach ($posts->take(3) as $post)
                    <a href="{{ route('blog.show', $post['id']) }}" class="topic-btn">
                        <div class="icon-box">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </div>
                        <p>{{ $post['title'] }}</p>
                    </a>
                    @endforeach
                </div>
                <div class="tags contact">
                    <h2 class="h2">Quote of the day</h2>
                    <div class="wrapper">
                        <p> <b>The illiterate of the 21st century will not be those who cannot read and write, but those who cannot
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
                                <a href="https://www.linkedin.com/in/olasunkanmi-arowolo-5619a165/" class="icon-box linkedin">
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

                {{-- <div class="newsletter">
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
                </div> --}}

            </div>


            <script>
            document.addEventListener('DOMContentLoaded', function () {
                const loadMoreBtn = document.querySelector('.load-more');
                loadMoreBtn.addEventListener('click', function () {
                    const hiddenPosts = document.querySelectorAll('.blog-card[style*="display: none"]');
                    hiddenPosts.forEach(post => {
                        post.style.display = 'block';
                    });
                    loadMoreBtn.style.display = 'none';
                });
            });
            </script>
        </div>
    </div>
@endsection
