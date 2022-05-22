<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
    <div class="sidenav h-100 bg-light modal-dialog">
        <!-- sidenav top -->
        <div class="navbar">
            <!-- brand -->
            <a href="index.html" class="navbar-brand ">
                <img src="{{ asset('basik/assets/img/logo.png') }}" alt="logo">
                <span class="hidden-folded d-inline l-s-n-1x ">Garage</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- Flex nav content -->
        <div class="flex scrollable hover">
            <div class="nav-active-text-primary" data-nav>
                <ul class="nav bg">
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Main</span>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">
                            <span class="nav-icon text-primary"><i data-feather='home'></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Applications</span>
                    </li>
                    <li>
                        <a href="{{ route('sparepart.index') }}">
                            <span class="nav-icon text-info"><i data-feather='truck'></i></span>
                            <span class="nav-text">Sparepart</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('history-transaksi') }}">
                            <span class="nav-icon text-info"><i data-feather='shopping-bag'></i></span>
                            <span class="nav-text">Transaksi Sparepart</span>
                        </a>
                    </li>
                    <li>
                        <a href="app.message.html">
                            <span class="nav-icon text-warning"><i data-feather='list'></i></span>
                            <span class="nav-text">Pengajuan Booking</span>
                        </a>
                    </li>
                    <li>
                        <a href="app.message.html">
                            <span class="nav-icon text-warning"><i data-feather='settings'></i></span>
                            <span class="nav-text">Servis</span>
                        </a>
                    </li>
                    <li>
                        <a href="app.mail.html">
                            <span class="nav-icon text-danger"><i data-feather='mail'></i></span>
                            <span class="nav-text">Transaksi Booking</span>
                        </a>
                    </li>
                    <li>
                        <a href="app.user.html">
                            <span class="nav-icon text-success"><i data-feather='users'></i></span>
                            <span class="nav-text">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="app.user.html">
                            <span class="nav-icon text-success"><i data-feather='user'></i></span>
                            <span class="nav-text">Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="app.user.html">
                            <span class="nav-icon text-success"><i data-feather='users'></i></span>
                            <span class="nav-text">Keluar</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>