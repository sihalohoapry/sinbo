<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style-landingpage/main.css') }}" type="text/css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />



    <title>Bengkel Eko | Sparepart </title>
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
                        <a class="nav-link " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service Kami</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ route('all-sparepart') }}">Sparepart</a>
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

   
    <section class="store-new-product" id="berita">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mt-5">
                    <h5>Detail Sparepart</h5>
                </div>
            </div>
            <div class="row mt-5 ">
                <div class="col-md-6 text-end mb-5">
                        <img class="img-fluid" src="{{ Storage::url($data->foto_sparepart) }}" width="400px" alt="">
                    
                </div>
                <div class="col-md-6 text-start">
                    <div class="products-text" ><h4>{{ $data->name_sparepart }}</h4></div>
                    <div class="text-black-50">Rp {{ $data->selling_price }}</div>
                    <div class="text-black-50">Stok {{ $data->stock_sparepart }}</div>
                    <div class="text-black-50 mt-3">Stok {{ $data->description }}</div>


                </div>
            </div>
        </div>
    </section>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>