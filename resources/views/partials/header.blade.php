<header>
    <div class="container">
        <nav class="navbar">
            <a href="/">
                <img src="{{ asset('assets/img/oa-tutors-logo-black.png') }}" alt="OA Tutors logo"
                    style="width: 8rem; height: 8rem;" class="logo-light">
                <img src="{{ asset('assets/img/oa-tutors-logo-white.png') }}" alt="OA Tutors logo"
                    style="width: 8rem; height: 8rem;" class="logo-dark">
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
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">Services </a>
                        <ul class="dropdown-menu">
                            <li><a href="/key-stage-1" class="dropdown-item">KS-1</a></li>
                            <li><a href="/key-stage-2" class="dropdown-item">KS-2 </a>
                            </li>
                            <li><a href="/key-stage-3" class="dropdown-item ">KS-3 </a>
                            </li>
                            {{-- <li><a href="/key-stage-2" class="dropdown-item">KS-2 <span class="promo"> Promo</span></a>
                            </li>
                            <li><a href="/key-stage-3" class="dropdown-item ">KS-3 <span class="promo">
                                        Promo</span></a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">Exam Prep</a>
                        <ul class="dropdown-menu">
                            <li><a href="/eleven-plus" class="dropdown-item">11+</a></li>
                            <li><a href="/gcse" class="dropdown-item">GCSE</a></li>
                        </ul>
                    </li>
                    <li><a href="/packages" class="nav-link">Packages</a></li>
                    <li><a href="/booking-policy" class="nav-link">Our Policies</a></li>
                    {{-- <li><a href="/backtoschool" class="nav-link">Promo/Offer</a>
                        <div class="hot">HOT<br>
                    </li> --}}
                    <!-- Learn Dropdown -->
                    @guest
                    <li class="nav-item dropdown">
                        <a href="#" class="start" id="start-learning-guest">Start Learning </a><span class="new">NEW</span>
                        <ul class="dropdown-menu" id="start-learning-dropdown-guest" style="display:none;">
                            <!-- Dropdown content same as before -->
                            <li class="nav-item dropdown">
                                <a href="/key-stage-1" class="dropdown-item">Key Stage 1</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/learnings/a-z#" class="dropdown-item"
                                        target="_blank">Learn Letters</a></li>
                                    <li><a href="https://classroom.google.com/" class="dropdown-item"
                                            target="_blank">Google Classroom</a></li>
                                    <li><a href="https://www.splashlearn.com/" class="dropdown-item"
                                            target="_blank">Splash Learning</a></li>
                                    <li><a href="https://www.khanacademy.org/" class="dropdown-item"
                                            target="_blank">Khan Academy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="/key-stage-2" class="dropdown-item">Key Stage 2 </a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://classroom.google.com/c/NzA4OTc5MTEyNTIw" class="dropdown-item"
                                            target="_blank">Google Classroom</a></li>
                                    <li><a href="https://www.splashlearn.com/" class="dropdown-item"
                                            target="_blank">Splash Learning</a></li>
                                    <li><a href="https://www.khanacademy.org/" class="dropdown-item"
                                            target="_blank">Khan Academy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="/key-stage-3" class="dropdown-item">Key Stage 3</a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://classroom.google.com/c/NzExNTg0ODA3MjU2" class="dropdown-item"
                                            target="_blank">Google Classroom</a></li>
                                    <li><a href="https://uk.splashlearn.com/signin#/student" class="dropdown-item"
                                            target="_blank">Splash Learning</a></li>
                                    <li><a href="https://www.khanacademy.org/teacher/class/ZFQJ2RC4/mastery/course-and-unit"
                                            class="dropdown-item" target="_blank">Khan Academy</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a href="#" class="start">Start Learning </a><span class="new">NEW</span>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a href="/key-stage-1" class="dropdown-item">Key Stage 1</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/learnings/a-z#" class="dropdown-item"
                                        target="_blank">Learn Letters</a></li>
                                    <li><a href="https://classroom.google.com/" class="dropdown-item"
                                            target="_blank">Google Classroom</a></li>
                                    <li><a href="https://www.splashlearn.com/" class="dropdown-item"
                                            target="_blank">Splash Learning</a></li>
                                    <li><a href="https://www.khanacademy.org/" class="dropdown-item"
                                            target="_blank">Khan Academy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="/key-stage-2" class="dropdown-item">Key Stage 2 </a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://classroom.google.com/c/NzA4OTc5MTEyNTIw" class="dropdown-item"
                                            target="_blank">Google Classroom</a></li>
                                    <li><a href="https://www.splashlearn.com/" class="dropdown-item"
                                            target="_blank">Splash Learning</a></li>
                                    <li><a href="https://www.khanacademy.org/" class="dropdown-item"
                                            target="_blank">Khan Academy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="/key-stage-3" class="dropdown-item">Key Stage 3</a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://classroom.google.com/c/NzExNTg0ODA3MjU2" class="dropdown-item"
                                            target="_blank">Google Classroom</a></li>
                                    <li><a href="https://uk.splashlearn.com/signin#/student" class="dropdown-item"
                                            target="_blank">Splash Learning</a></li>
                                    <li><a href="https://www.khanacademy.org/teacher/class/ZFQJ2RC4/mastery/course-and-unit"
                                            class="dropdown-item" target="_blank">Khan Academy</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>

                <button class="theme-btn theme-btn-desktop light">
                    <ion-icon name="moon" class="moon"></ion-icon>
                    <ion-icon name="sunny" class="sun"></ion-icon>
                </button>
            </div>

            @guest
            <x-modal name="login-prompt" maxWidth="sm" focusable>
                <div class="p-6">
                    <h2 class="text-lg font-semibold mb-4">Please log in to start learning</h2>
                    <p class="mb-4">You need to be logged in to access the learning resources.</p>
                    <a href="/login" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Log In</a>
                </div>
            </x-modal>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const startLearningLink = document.getElementById('start-learning-guest');
                    const dropdownMenu = document.getElementById('start-learning-dropdown-guest');

                    function openLoginPrompt() {
                        window.dispatchEvent(new CustomEvent('open-modal', { detail: 'login-prompt' }));
                    }

                    if (startLearningLink) {
                        startLearningLink.addEventListener('click', function (e) {
                            e.preventDefault();
                            openLoginPrompt();
                        });

                        startLearningLink.addEventListener('mouseenter', function (e) {
                            e.preventDefault();
                            openLoginPrompt();
                        });
                    }
                });
            </script>

            <!-- MOBILE NAVIGATION -->
            <div class="mobile-nav">
                <button class="nav-close-btn">
                    <ion-icon name="close-outline"></ion-icon>
                </button>
                <div class="wrapper">
                    <p class="h3 nav-title">Main Menu</p>
                    <ul>
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/eleven-plus" class="nav-link">11+</a></li>
                        <li class="nav-item"><a href="/key-stage-1" class="nav-link">Key Stage 1</a></li>
                        <li class="nav-item"><a href="/key-stage-2" class="nav-link">Key Stage 2</a></li>
                    <li class="nav-item"><a href="/key-stage-3" class="nav-link">Key Stage 3</a></li>
                        {{-- <li class="nav-item"><a href="/key-stage-2" class="nav-link">Key Stage 2</a> <span
                                class="promo"> Promo</span></li>
                        <li class="nav-item"><a href="/key-stage-3" class="nav-link">Key Stage 3</a><span
                                class="promo"> Promo</span></li> --}}
                        <li class="nav-item"><a href="/packages" class="nav-link">Packages</a></li>
                        <li class="nav-item"><a href="/booking-policy" class="nav-link">Our Policies</a></li>
                        {{-- <li class="nav-item"><a href="/backtoschool" class="nav-link">Promo/Offer</a> <span
                                class="hot"> HOT</span> </li>

                        <li class="nav-item dropdown"> --}}
                            <a href="#" class="start">Start Learning</a> <span class="new"> New</span>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a href="/key-stage-1" class="dropdown-item">Key Stage 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/learnings/a-z#" class="dropdown-item"
                                            target="_blank">Learn Letters</a></li>
                                        <li><a href="https://classroom.google.com/" class="dropdown-item"
                                                target="_blank">Google Classroom</a></li>
                                        <li><a href="https://www.splashlearn.com/" class="dropdown-item"
                                                target="_blank">Splash Learning</a></li>
                                        <li><a href="https://www.khanacademy.org/" class="dropdown-item"
                                                target="_blank">Khan Academy</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="/key-stage-2" class="dropdown-item">Key Stage 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="https://classroom.google.com/c/NzA4OTc5MTEyNTIw"
                                                class="dropdown-item" target="_blank">Google Classroom</a></li>
                                        <li><a href="https://www.splashlearn.com/" class="dropdown-item"
                                                target="_blank">Splash Learning</a></li>
                                        <li><a href="https://www.khanacademy.org/" class="dropdown-item"
                                                target="_blank">Khan Academy</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="/key-stage-3" class="dropdown-item">Key Stage 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="https://classroom.google.com/c/NzExNTg0ODA3MjU2"
                                                class="dropdown-item" target="_blank">Google Classroom</a></li>
                                        <li><a href="https://uk.splashlearn.com/signin#/student" class="dropdown-item"
                                                target="_blank">Splash Learning</a></li>
                                        <li><a href="https://www.khanacademy.org/teacher/class/ZFQJ2RC4/mastery/course-and-unit"
                                                class="dropdown-item" target="_blank">Khan Academy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="h3 nav-title">Topics</p>
                    <ul>
                        <li class="nav-item"><a href="#" class="nav-link">Database</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Accessibility</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Web Performance</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
{{-- @include('partials.breadcrumbs') --}}


<style>
    .nav-item {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 200px;
        background-color: #f1f1f1;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        list-style: none;
        padding: 0;
    }

    .dropdown-item {
        display: block;
        padding: 10px 10px;
        text-decoration: none;
        color: #333;
        white-space: nowrap;
    }

    .dropdown-item:hover {
        background-color: #ddd;
    }

    .nav-item:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-menu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-left: 0.1rem;
        margin-top: -0.2rem;
    }

    .start {
        color: rgb(255, 255, 255);
        background: var(--accent);
        font-family: Inherit;
        font-size: inherit;
        font-weight: 600;
        text-decoration: none;
        padding: 0.5rem .5rem;
        border-radius: 5px
    }

    .start:hover {
        background: green;
        color: #fff;
    }

    .hot {
        font-family: Inherit;
        color: #fff;
        background-color: #e91e63;
        font-size: 10px;
        font-weight: 600;
        line-height: 1.2;
        padding-top: 2px;
        padding-bottom: 2px;
        padding-left: 4px;
        padding-right: 4px;
        margin-left: 0rem;
        margin-top: 0.5rem;
        margin-bottom: 1.5rem;
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        border-radius: 4px;

    }

    .new {
        font-family: Inherit;
        color: #fff;
        background-color: #479211;
        font-size: 10px;
        font-weight: 600;
        line-height: 1.2;
        padding-top: 2px;
        padding-bottom: 2px;
        padding-left: 4px;
        padding-right: 4px;
        margin-left: 0rem;
        margin-top: 0.5rem;
        margin-bottom: 1.5rem;
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        border-radius: 4px;

    }

    .promo {
        font-family: Inherit;
        color: #fff;
        background-color: #921a11;
        font-size: 10px;
        font-weight: 600;
        line-height: 1.2;
        padding-top: 2px;
        padding-bottom: 2px;
        padding-left: 4px;
        padding-right: 4px;
        margin-left: 0rem;
        margin-top: 0rem;
        margin-bottom: 1.5rem;
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        border-radius: 4px;

    }

    /* Show dropdown menu when toggled */
    .dropdown-menu.show {
        display: block !important;
        position: static;
        box-shadow: none;
        background-color: transparent;
        padding-left: 1rem;
    }
</style>
