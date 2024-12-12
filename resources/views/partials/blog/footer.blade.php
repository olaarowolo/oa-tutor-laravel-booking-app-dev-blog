<style>
    body {
        line-height: 1.5;
        font-family: 'Poppins', sans-serif;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 1170px;
        margin: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    ul {
        list-style: none;
    }

    .footer {
        background-color: #24262b;
        padding: 50px 0;
    }

    .footer-col {
        width: 25%;
        padding: 0 15px;
    }

    .footer-col h4 {
        font-size: 12px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }

    .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        font-size: 12px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #bbbbbb;
        display: block;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
    }

    .footer-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
        color: #24262b;
        background-color: #ffffff;
    }

    /*responsive*/
    @media(max-width: 767px) {
        .footer-col {
            width: 50%;
            margin-bottom: 30px;
        }
    }

    @media(max-width: 574px) {
        .footer-col {
            width: 100%;
            /* text-align: center */
        }

        .footer-col h4::before {}
    }

    .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }
</style>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>OA Tutors</h4>
                <ul>
                    <li><a href="/about">about us</a></li>
                    <li><a href="/#services">our services</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Our policies</h4>
                <ul>
                    <li><a href="/terms">Terms</a></li>
                    <li><a href="/privacy-policy">privacy policy</a></li>
                    <li><a href="/booking-policy">booking policy</a></li>
                    <li><a href="/tuition-delivery-policy">Tuition Delivery Policy</a></li>
                    <li><a href="/dressing-policy">Dressing Policy</a></li>
                    <li><a href="/booking-policy/#cancellation">Cancellation Policy</a></li>
                    {{-- <li><a href="#">payment options</a></li> --}}
                </ul>
            </div>
            <div class="footer-col">
                <h4>Become a tutor</h4>
                <ul>
                    <li><a href="/join-oa-tutors">How to become a tutor</a></li>
                    <li><a href="/join-oa-tutors/#tutor-requirements">Tutor requirements</a></li>
                    {{-- <li><a href="#">Opportunities</a></li> --}}
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="https://facebook.com/olaarowoloo"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/olaarowolo"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/olaarowolo"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/olasunkanmi-arowolo-5619a165/"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright footer">
        <div class=" ">
            <p class="text-gray-400 bg-white-100 body-font" style="font-size: 0.875rem;">
                © 2024 OA Tutors. All rights reserved.</p>
            <div class="text-gray-400 bg-white-100 body-font text-center" style="font-size: 0.875rem;">
                Designed by
                <a href="https://olaarowolo.com"
                    style="color: rgb(184, 184, 184); text-decoration: none; transition: color 0.3s ease;">Olasunkanmi
                    Arowolo</a>
                <div>
                    <a href="https://github.com/olaarowolo">
                        <iconify-icon icon="mdi:github" width="1.2rem" height="1.2rem"></iconify-icon>
                    </a>
                    <a href="">
                        <iconify-icon icon="lineicons:website" width="1.2em" height="1.2em"></iconify-icon>
                    </a>
                    <a href="">
                        <iconify-icon icon="line-md:linkedin" width="1.2em" height="1.2em"></iconify-icon>
                    </a>
                    <a href="">
                        <iconify-icon icon="quill:phone" width="1.2em" height="1.2em"></iconify-icon>
                    </a>
                </div>
            </div>
            </p>
        </div>
    </div>
</footer>
