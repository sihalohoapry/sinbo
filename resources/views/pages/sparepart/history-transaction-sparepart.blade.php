@extends('layouts.admin')
@section('title')
    Transaction Sparepart
@endsection
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->
    @include('alert.success')
    <div>
        <div class="page-hero page-container " id="page-hero">
            <div class="padding d-flex">
                <div class="page-title">
                    <h2 class="text-md text-highlight">Transaksi Sparepart</h2>
                    <small class="text-muted">Data - data histori transaksi</small>
                </div>
                <div class="flex"></div>
                <div>
                    <a href="{{ route('create-transaction') }}" class="btn btn-md text-muted">Buat Transaksi</span>
                        <i data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="table-responsive">
                    <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th><span class="text-muted">No</span></th>
                                <th><span class="text-muted">Nama</span></th>
                                <th><span class="text-muted">Tanggal transaksi</span></th>
                                <th><span class="text-muted">Laba</span></th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($transactions as $row )
                            <tr class=" " data-id="3">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted">{{ $no ++ }}</small>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->customer_name }}
                                    </span>
                                </td>
                                <td class="flex">
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $row->created_at }}
                                    </div>
                                </td>
                                <td>
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $row->profit }}
                                    </div>
                                </td>
                                <td>                                 
                                </td>
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="dropdown-item" href="{{ route('detail-transaction', $row->id) }}">
                                                Lihat Detail
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt=5">
                    <a href="{{ route('download-transaction') }}" class="btn btn-success mt-5">Print Trnasaksi Sparepart</a>
                </div>
            </div>
            
        </div>
    </div>
    <!-- ############ Main END-->
</div>
<!-- ############ Content END-->
@endsection