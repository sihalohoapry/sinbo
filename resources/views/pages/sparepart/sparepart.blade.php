@extends('layouts.admin')
@section('title')
    Sparepart
@endsection
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->
    @include('alert.success')
    <div>
        <div class="page-hero page-container " id="page-hero">
            <div class="padding d-flex">
                <div class="page-title">
                    <h2 class="text-md text-highlight">Sparepart</h2>
                    <small class="text-muted">Daftar sparepart</small>
                </div>
                <div class="flex"></div>
                <div>
                    <a href="{{ route('sparepart.create') }}" class="btn btn-md text-muted">Tambah sparepart</span>
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
                                <th><span class="text-muted">Stok</span></th>
                                <th><span class="text-muted">Nama Sparepart</span></th>
                                <th><span class="text-muted">Harga</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($spareparts as $row )
                            <tr class=" " data-id="3">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted">{{ $no ++ }}</small>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->stock_sparepart }}
                                    </span>
                                </td>
                                <td class="flex">
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $row->name_sparepart }}
                                    </div>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->selling_price }}
                                    </span>
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="dropdown-item" href="#">
                                                See detail
                                            </a>
                                            <a class="dropdown-item download">
                                                Download
                                            </a>
                                            <a class="dropdown-item edit">
                                                Edit
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item trash">
                                                Delete item
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ############ Main END-->
</div>
<!-- ############ Content END-->
@endsection