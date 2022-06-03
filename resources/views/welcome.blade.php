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
                <img src="{{ asset('basik/assets/img/logo.png') }}" alt="">
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
                        <a class="nav-link" href="#service">Service Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('all-sparepart') }}">Sparepart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                @if (Auth::user())
                <div class="d-flex">
                    <a href="{{ route('home') }}" class="btn btn-master btn-primary me-3">
                        Dashboard
                    </a>
                </div>  
                @else
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                        Sign In
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-master btn-primary">
                        Sign Up
                    </a>
                </div>
                @endif


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
                            @if (Auth::user())
                            @else
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                    Booking Online
                                </a>
                            </p>
                            @endif
                        </div>
                        <div class="col-lg-6 col-12 copywriting ">
                                <a class="" href="#">
                                    <img src="{{ asset('style-landingpage/images/banner.jpg') }}" class="img-fluid rounded-3" alt="">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps" id="service">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-12 col-12 header-wrap text-center mb-3">
                    <p class="story">
                        BENGKEL EKO GARAGE
                    </p>
                    <h2 class="primary-header mb-5">
                        Melayani service
                    </h2>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('style-landingpage/images/service-tigaa.jpg') }}" class="img-fluid rounded"  alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting pt-2">
                    <h2 class=" ">
                        Service Umum
                    </h2>
                    <p class="support">
                        melayanui service umum untuk tipe mobil <br> Nissan, Isuzu, Toyota, dan lainnya.
                    </p>
                </div>
            </div>
            <div class="row item-step mt-5 pb-70">
                <div class="col-lg-6 col-12 text-left copywriting ">
                    <h2 class="">
                        General Check-up Mobil
                    </h2>
                    <p class="support">
                        memastikan agar kondisi mobil dalam keadaan baik <br> serta terhindar dari kerusakan yang parah.
                    </p>
                </div>
                <div class="col-lg-6 col-12 ">
                    <img src="{{ asset('style-landingpage/images/service-satu.jpg') }}" class="img-fluid rounded" alt="">
                </div>

            </div>
            <div class="row item-step mt-5 pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('style-landingpage/images/service-empat.jpg') }}" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting pt-3" >
                    <h2 class="">
                        Booking Service
                    </h2>
                    <p class="support">
                        Melayani booking service baik yang dilakukan di bengkel <br> maupun dilakukan dirumah anda.
                    </p>
                    
                </div>
            </div>
        </div>
    </section>

    
    <section class="benefits mt-5 pt-5">
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
            {{-- disini  --}}
            <div class="row mt-4">

                @php
                $incrementProduct =0
                @endphp

                @forelse ($data as $item )
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+=100 }}">
                    <a href="{{ route('detail-sparepart', $item->slug) }}" class="component-product d-block">
                        <div class="product-thumnail">
                            <div class="product-img" style="
                @if ($item->foto_sparepart)
                    background-image: url('{{ Storage::url($item->foto_sparepart) }}')
                @else
                    background-color: #eee;
                @endif
            ">
                            </div>
                        </div>
                        <div class="products-text">{{ $item->name_sparepart }}</div>
                        <div class="text-black-50">Rp {{ $item->selling_price }}</div>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    Tidak ada produk
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        KONTAK KAMI
                    </p>
                    <h2 class="primary-header">
                        BENGKEL EKO GARAGE
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="item-review">
                                <div class="products-text text-center story">Kontak Perrson</div>
                                <div class="user">
                                    <div class="info">
                                        <h4 class="name">
                                            Telpon
                                        </h4>
                                        <p class="role">
                                            0813-8138-4613
                                        </p>
                                    </div>
                                    <div class="info">
                                        <h4 class="name">
                                            WhatsUp
                                        </h4>
                                        <p class="role">
                                            0813-8138-4613
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="item-review">
                                <div class="products-text text-center story">Alamat Bengkel</div>
                                <div class="user">
                                    <div class="info">
                                        <h4 class="name">
                                            Alamat
                                        </h4>
                                        <p class="role">
                                            Watu Agung, Kec. Kalirejo, Kabupaten Lampung Tengah, Lampung 34174
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                                All Rights Reserved. Copyright Benngkel Eko Garage.
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