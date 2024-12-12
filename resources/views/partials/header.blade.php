<header>
    <div class="container">
        <nav class="navbar">
            <a href="/">
                <img src="{{ asset('assets/img/oa-tutors-logo-black.png') }}" alt="OA Tutors logo" style="width: 8rem; height: 8rem;" class="logo-light">
                <img src="{{ asset('assets/img/oa-tutors-logo-white.png') }}" alt="OA Tutors logo" style="width: 8rem; height: 8rem;" class="logo-dark">
            </a>
            <div class="btn-group">
                <button class="theme-btn theme-btn-mobile light">
                    <ion-icon name="moon" class="moon"></ion-icon>
                    <ion-icon name="sunny" class="sun"></ion-icon>
                </button>
                <button class="nav-menu-btn">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
            </div>
            <div class="flex-wrapper">
                <ul class="desktop-nav">
                    <li>
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li>
                        <a href="/eleven-plus" class="nav-link">11+</a>
                    </li>
                    <li>
                        <a href="/key-stage-1" class="nav-link">KS-1</a>
                    </li>
                    <li>
                        <a href="/key-stage-2" class="nav-link">KS-2</a>
                    </li>
                    <li>
                        <a href="/key-stage-3" class="nav-link">KS-3</a>
                    </li>
                    <li>
                        <a href="/coding4kids" class="nav-link">Coding4Kids</a>
                    </li>
                    <li>
                        <a href="/booking-policy" class="nav-link">Our Policies</a>
                    </li>
                    {{-- <li>
                        <a href="/blog" class="nav-link">Blog</a>
                    </li> --}}
                    {{-- <li>
                        <a href="#" class="nav-link">Contact</a>
                    </li> --}}
                </ul>
                <button class="theme-btn theme-btn-desktop light">
                    <ion-icon name="moon" class="moon"></ion-icon>
                    <ion-icon name="sunny" class="sun"></ion-icon>
                </button>
            </div>
            <div class="mobile-nav">
                <button class="nav-close-btn">
                    <ion-icon name="close-outline"></ion-icon>
                </button>
                <div class="wrapper">
                    <p class="h3 nav-title">Main Menu</p>
                    <ul>
                       <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                       <li class="nav-item">
                            <a href="/eleven-plus" class="nav-link">11+</a>
                        </li>
                       <li class="nav-item">
                            <a href="/key-stage-1" class="nav-link">KS-1</a>
                        </li>
                       <li class="nav-item">
                            <a href="/key-stage-2" class="nav-link">KS-2</a>
                        </li>
                       <li class="nav-item">
                            <a href="/key-stage-3" class="nav-link">KS-3</a>
                        </li>
                       <li class="nav-item">
                            <a href="/coding4kids" class="nav-link">Coding4Kids</a>
                        </li>
                       <li class="nav-item">
                            <a href="/booking-policy" class="nav-link">Our Policies</a>
                        </li>
                       {{-- <li class="nav-item">
                            <a href="/blog" class="nav-link">Blog</a>
                        </li> --}}
                       {{-- <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li> --}}

                    </ul>
                </div>
                <div>
                    <p class="h3 nav-title">Topics</p>
                    <ul>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Database</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Accessibility</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Web Performance</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>