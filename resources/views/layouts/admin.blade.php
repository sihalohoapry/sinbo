<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SINBO | @yield('title')</title>
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- style -->
        <!-- build:css ../dashboard/css/site.min.css -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('dashboard/css/theme.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}" type="text/css" />
        <!-- endbuild -->
    </head>
    <body class="layout-row">
        {{-- <!-- ############ Aside START--> --}}
        @include('includes.sidebar')
        <div id="main" class="layout-column flex">
            {{-- <!-- ############ Header START--> --}}
            @include('includes.header')
            {{-- content --}}
            @yield('content')
            <!-- ############ Footer START-->
            <div id="footer" class="page-footer hide">
                <div class="d-flex p-3">
                    <span class="text-sm text-muted flex">&copy; Copyright. flatfull.com</span>
                    <div class="text-sm text-muted">Version 1.0.0</div>
                </div>
            </div>
            <!-- ############ Footer END-->
        </div>
        <!-- build:js ../dashboard/js/site.min.js -->
        <!-- jQuery -->
        <script src="{{asset('dashboard/libs/jquery/dist/jquery.min.js')  }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('dashboard/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('dashboard/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- ajax page -->
        <script src="{{ asset('dashboard/libs/pjax/pjax.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/ajax.js') }}"></script>
        <!-- lazyload plugin -->
        <script src="{{ asset('dashboard/js/lazyload.config.js') }}"></script>
        <script src="{{ asset('dashboard/js/lazyload.js') }}"></script>
        <script src="{{ asset('dashboard/js/plugin.js') }}"></script>
        <!-- scrollreveal -->
        <script src="{{ asset('dashboard/libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
        <!-- feathericon -->
        <script src="{{ asset('dashboard/libs/feather-icons/dist/feather.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/plugins/feathericon.js') }}"></script>
        <!-- theme -->
        <script src="{{ asset('dashboard/js/theme.js') }}"></script>
        <script src="{{ asset('dashboard/js/utils.js') }}"></script>
        <!-- endbuild -->
    </body>
</html>
