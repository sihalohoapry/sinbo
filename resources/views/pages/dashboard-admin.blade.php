@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
                <!-- ############ Content START-->
                <div id="content" class="flex">
                    <!-- ############ Main START-->
                    <div>
                        <div class="page-hero page-container" id="page-hero">
                            <div class="padding d-flex pt-0">
                                <div class="page-title">
                                    <h2 class="text-md text-highlight">Dashboard</h2>
                                    <small class="text-muted">Selamat datang,
                                        <strong>{{ Auth::user()->name }}</strong>
                                    </small>
                                </div>
                                <div class="flex"></div>
                            </div>
                        </div>
                        <div class="page-content page-container" id="page-content">
                            <div class="padding pt-0">
                                <div class="row row-sm sr">
                                    @if (Auth::user()->role == "ADMIN" || Auth::user()->role == "SUPER-ADMIN")
                                        {{-- user --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>User Terdaftar</div>
                                                        <div class="text-success mt-2">
                                                            {{ $users }} orang
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- soareoart --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-primary">
                                                        <i data-feather="truck"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Sparepart</div>
                                                        <div class="text-success mt-2">
                                                            {{ $spareparts }} items
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Penjualan --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-warning">
                                                        <i data-feather="dollar-sign"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Penjualan sparepart</div>
                                                        <div class="text-success mt-2">
                                                            Rp {{ $profits }}
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- list booking --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                                        <i data-feather="list"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Booking</div>
                                                        <div class="text-success mt-2">
                                                            {{ $allBooking }} Booking
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="mb-2 text-center">
                                                    <small class="text-muted">Informasi booking</small>
                                                </div>
                                                <div class="row row-sm text-center">
                                                        
                                                    <div class="col-4">
                                                        <div class="text-highlight text-md text-warning">{{ $waitBooking }}</div>
                                                        <small>Menunggu</small>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="text-md text-success">{{ $accptBooking }}</div>
                                                        <small>Diterima</small>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="text-danger text-md">{{ $rejectBooking }}</div>
                                                        <small>Ditolak</small>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                                        <i data-feather="list"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Jumlah Booking</div>
                                                        <div class="text-success mt-2">
                                                            {{ $allBookingByIdUser }}
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- soareoart --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-warning">
                                                        <i data-feather="list"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Booking menunggu</div>
                                                        <div class="text-success mt-2">
                                                            {{ $BookingByIdUserAndStatusWait }} 
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Penjualan --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-danger">
                                                        <i data-feather="list"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Booking Ditolak</div>
                                                        <div class="text-success mt-2">
                                                            {{ $BookingByIdUserAndStatusReject }}
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ############ Main END-->
                </div>
                <!-- ############ Content END-->
@endsection
