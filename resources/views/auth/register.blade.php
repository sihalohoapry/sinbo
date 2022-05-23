<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Bengkel Eko Garage</title>
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- style -->
        <!-- build:css ../assets/css/site.min.css -->
        <link rel="stylesheet" href="/basik/assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="/basik/assets/css/theme.css" type="text/css" />
        <link rel="stylesheet" href="/basik/assets/css/style.css" type="text/css" />
        <!-- endbuild -->
    </head>
    <body class="layout-row">
        <div class="d-flex flex-column flex">
            <div class="row no-gutters h-100">
                <div class="col-md-6 bg-danger" style="background-image: url('basik/assets/img/login.jpg') ; " >
                    <div class="p-3 p-md-5 d-flex flex-column h-100">
                        <h4 class="mb-3 text-white">Bengkel Eko Garage</h4>
                        <div class="text-fade">Melayani Service dan Penjualan Sparepart</div>
                        <div class="d-flex flex align-items-center justify-content-center">
                            {{-- <img src="{{ asset('basik/assets/img/login.jpg') }}" alt=""> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="content-body">
                    <div class="p-3 p-md-5">
                        <h5>Selamat Datang</h5>
                        <p>
                            <small class="text-muted">Silahkan masuk untuk melanjutkan aktifitasmu</small>
                        </p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Nomer Telpon</label>
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                        
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Konfirmasi Kata Sandi</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>
                        
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- build:js ../assets/js/site.min.js -->
        <!-- jQuery -->
        <script src="/basik/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/basik/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="/basik/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- ajax page -->
        <script src="/basik/libs/pjax/pjax.min.js"></script>
        <script src="/basik/assets/js/ajax.js"></script>
        <!-- lazyload plugin -->
        <script src="/basik/assets/js/lazyload.config.js"></script>
        <script src="/basik/assets/js/lazyload.js"></script>
        <script src="/basik/assets/js/plugin.js"></script>
        <!-- scrollreveal -->
        <script src="/basik/libs/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- feathericon -->
        <script src="/basik/libs/feather-icons/dist/feather.min.js"></script>
        <script src="/basik/assets/js/plugins/feathericon.js"></script>
        <!-- theme -->
        <script src="/basik/assets/js/theme.js"></script>
        <script src="/basik/assets/js/utils.js"></script>
        <!-- endbuild -->
    </body>
</html>