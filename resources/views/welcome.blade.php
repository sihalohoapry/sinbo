<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style-landingpage/main.css') }}" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>Bengkel Eko </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('dashboard/img/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sparepart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                        Sign In
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-master btn-primary">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="banner pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                                SERVIS KE AHLINYA
                            </p>
                            <h1 class="header">
                                Servis Mobilmu ke <span class="text-purple">Bengkel Eko  <br> Garage</span> Hari ini
                            </h1>
                            <p class="support">
                                Menyediakan sparepart mobil dan booking servis online dengan mendaftarkan diri di website ini.
                            </p>
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                    Booking Online
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{ asset('style-landingpage/images/banner.png') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-12 col-12 header-wrap text-center mb-3">
                    <p class="story">
                        BENGKEL EKO GARAGE
                    </p>
                    <h2 class="primary-header">
                        Melayani service
                    </h2>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('style-landingpage/images/step1.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting pt-5">
                    <p class="story">
                        BETTER CAREER
                    </p>
                    <h2 class="primary-header">
                        Prepare The Journey
                    </h2>
                    <p class="support">
                        Learn from anyone around the <br> world and get a new skills
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <p class="story">
                        STUDY HARDER
                    </p>
                    <h2 class="primary-header">
                        Finish The Project
                    </h2>
                    <p class="support">
                        Each of you will be joining the private group and also <br> working together with team members on project
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('style-landingpage/images/step2.png') }}" class="cover" alt="">
                </div>

            </div>
            <div class="row item-step pt-5">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('style-landingpage/images/step3.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting pt-5">
                    <p class="story">
                        END GAME
                    </p>
                    <h2 class="primary-header">
                        Big Demo Day
                    </h2>
                    <p class="support">
                        Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                    </p>
                    
                </div>
            </div>
        </div>
    </section>

    
    <section class="benefits mt-5">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        BENGKEL EKO GARAGE
                    </p>
                    <h2 class="primary-header">
                        Menjual Sparepart Mobil
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('style-landingpage/images/ic_globe.png') }}" class="icon" alt="">
                        <h3 class="title">
                            Diversity
                        </h3>
                        <p class="support">
                            Learn from anyone around the <br> world and get a new skills
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('style-landingpage/images/ic_globe-1.png') }}" class="icon" alt="">
                        <h3 class="title">
                            A.I Guideline
                        </h3>
                        <p class="support">
                            Lara will help you to choose <br> which path that suitable for you
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('style-landingpage/images/ic_globe-2.png') }}" class="icon" alt="">
                        <h3 class="title">
                            1-1 Mentoring
                        </h3>
                        <p class="support">
                            We will ensure that you will get <br> what you really do need
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('style-landingpage/images/ic_globe-3.png') }}" class="icon" alt="">
                        <h3 class="title">
                            Future Job
                        </h3>
                        <p class="support">
                            Get your dream job in your dream <br> company together with us
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        GOOD INVESTMENT
                    </p>
                    <h2 class="primary-header text-white">
                        Start Your Journey
                    </h2>
                    <p class="support">
                        Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            View Syllabus
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    GILA BELAJAR
                                </p>
                                <h1 class="price text-center">
                                    $280K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage/images/ic_check.svg') }}" alt="">
                                    <p>
                                        Pro Techstack Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        iMac Pro 2021 & Display
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Premium Design Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Website Builder
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="#" class="btn btn-master btn-primary w-100 mt-3">
                                        Take This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    BARU MULAI
                                </p>
                                <h1 class="price text-center">
                                    $140K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="#" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-70">
                <div class="col-lg-12 col-12 text-center">
                    <img src="{{ asset('style-landingpage') }}/assets/images/brands.png" height="30" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        SUCCESS STUDENTS
                    </p>
                    <h2 class="primary-header">
                        We Really Love Laracamp
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ asset('style-landingpage') }}/assets/images/stars.svg" alt="">
                                <p class="message">
                                    I was not really into code but after they teach me how to train my logic then I was really fall in love with code
                                </p>
                                <div class="user">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/fanny_photo.png" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Fanny
                                        </h4>
                                        <p class="role">
                                            Developer at Google
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ asset('style-landingpage') }}/assets/images/stars.svg" alt="">
                                <p class="message">
                                    Code is really important if we want to build a company and strike to the win
                                </p>
                                <div class="user">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/angga.png" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Angga
                                        </h4>
                                        <p class="role">
                                            CEO at BWA Corp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ asset('style-landingpage') }}/assets/images/stars.svg" alt="">
                                <p class="message">
                                    My background is design and art but I do really love how to make my design working in the development phase
                                </p>
                                <div class="user">
                                    <img src="{{ asset('style-landingpage') }}/assets/images/beatrice.png" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Beatrice
                                        </h4>
                                        <p class="role">
                                            QA at Facebook
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                                All Rights Reserved. Copyright Laracamp BWA Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>