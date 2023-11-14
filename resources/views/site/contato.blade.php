@extends('layout.layout')

@section('tile', 'Contato')

@section('conteudo')

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fitmas - Gym & Fitness HTML Template</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

</head>

<body>
    <!--********************************
   		Code Start From Here
	******************************** -->
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contact Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">CONTACT US</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        Contact Area
    ==============================-->
    <div class="contact-area space bg-smoke2">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon1.svg" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Call Us 24/7</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">+584 (25) 21453</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon2.svg" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">MAke A Quote</span>
                            <h6 class="contact-info_text"><a href="mailto:info@Fitmas.com">info@Fitmas.com</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon3.svg" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Service Station</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">25 Hilton Street</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-sec2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.025464890086!2d-46.434437023885586!3d-23.495592259180768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1699896050122!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="container">
        <div class="contact-form-area space-bottom">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="contact-form-thumb">
                        <img src="assets/img/normal/contact1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 bg-smoke2">
                    <div class="contact-form-wrap">
                        <div class="title-area">
                            <span class="sub-title">Contact Us
                            </span>
                            <h2 class="sec-title">Send Us Message</h2>
                        </div>
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" id="name" placeholder="Your Name">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="email" id="email" placeholder="Email Address">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="subject" id="subject" class="form-select style-white">
                                    <option value="" disabled="" selected="" hidden="">Select Subject</option>
                                    <option value="one">Body Building</option>
                                    <option value="two">Power Lifting</option>
                                    <option value="three">Meditation Class</option>
                                    <option value="four">Boxing Class</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea placeholder="Type Your Message" id="contactForm" class="form-control style-white"></textarea>
                            </div>

                            <div class="form-btn col-12">
                                <button class="btn">Send A Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Follow Our
                </span>
                <h2 class="sec-title">Instagram Feed</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed1.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed1.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed2.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed2.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed3.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed3.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed4.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed4.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed5.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed5.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed6.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed6.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed7.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed7.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed8.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed8.png" alt="portfolio">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
</body>

</html>

@endsection
