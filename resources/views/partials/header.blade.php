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
                        <a href="#" class="nav-link">Services <span class="promo"> Promo</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/key-stage-1" class="dropdown-item">KS-1</a></li>
                            <li><a href="/key-stage-2" class="dropdown-item">KS-2 <span class="promo"> Promo</span></a>
                            </li>
                            <li><a href="/key-stage-3" class="dropdown-item ">KS-3 <span class="promo">
                                        Promo</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">Exam Prep</a>
                        <ul class="dropdown-menu">
                            <li><a href="/eleven-plus" class="dropdown-item">11+</a></li>
                            <li><a href="/gcse" class="dropdown-item">GCSE</a></li>
                        </ul>
                    </li>
                    <li><a href="/pricing" class="nav-link">Packages</a></li>
                    <li><a href="/booking-policy" class="nav-link">Our Policies</a></li>
                    <li><a href="/backtoschool" class="nav-link">Promo/Offer</a>                        <div class="hot">HOT<br>
                    </li>
                    <!-- Learn Dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="start">Start Learning</a>
                        <div class="new">NEW<br>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a href="/key-stage-1" class="dropdown-item">Key Stage 1</a>
                                    <ul class="dropdown-menu">
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

                <button class="theme-btn theme-btn-desktop light">
                    <ion-icon name="moon" class="moon"></ion-icon>
                    <ion-icon name="sunny" class="sun"></ion-icon>
                </button>
            </div>

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
                        <li class="nav-item"><a href="/key-stage-2" class="nav-link">Key Stage 2</a> <span class="promo"> Promo</span></li>
                        <li class="nav-item"><a href="/key-stage-3" class="nav-link">Key Stage 3</a><span class="promo"> Promo</span></li>
                        <li class="nav-item"><a href="/pricing" class="nav-link">Packages</a></li>
                        <li class="nav-item"><a href="/booking-policy" class="nav-link">Our Policies</a></li>
                        <li class="nav-item"><a href="/backtoschool" class="nav-link">Promo/Offer</a> <span class="hot"> HOT</span> </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="start">Start Learning</a> <span class="new"> New</span>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a href="/key-stage-1" class="dropdown-item">Key Stage 1</a>
                                    <ul class="dropdown-menu">
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


<style>

    header {
    position: sticky;
    top: 0;
    z-index: 1000; /* Ensures the header stays above other elements */
    background-color: #fff; /* Set a background color to avoid transparency issues */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: Add a shadow for better visibility */

}

/* For mobile-specific adjustments */
@media (max-width: 768px) {
    header {
        top: 0; /* Ensures it sticks to the top on smaller screens */
    }
}
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
</style>
