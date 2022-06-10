@extends('layouts.admin')
@section('title')
    History Service
@endsection
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->
    @include('alert.success')
    @include('alert.failed')
    <div>
        <div class="page-hero page-container " id="page-hero">
            <div class="padding d-flex">
                <div class="page-title">
                    <h2 class="text-md text-highlight">History Service</h2>
                    <small class="text-muted">daftar service yang telah dilakukan</small>
                </div>
                <div class="flex"></div>
            </div>
        </div>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="table-responsive">
                    <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th><span class="text-muted">No</span></th>
                                <th><span class="text-muted">Atas Nama</span></th>
                                <th><span class="text-muted">Service</span></th>
                                <th><span class="text-muted">Tanggal Selesai</span></th>
                                <th><span class="text-muted">Status Service</span></th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $row )
                            <tr class=" " data-id="3">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted">{{ $no ++ }}</small>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->User->name }}
                                    </span>
                                </td>
                                <td class="flex">
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $row->title_booking }}
                                    </div>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->updated_at }}
                                    </span>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->status_service }}
                                    </span>                                 
                                </td>
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            
                                                <a href="{{ route('detail-service', $row->id) }}" class="dropdown-item" type="submit">
                                                    Lihat Detail
                                                </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="mt=5">
                        <a href="{{ route('download-history-service') }}" class="btn btn-success mt-5">Print History Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ############ Main END-->
</div>
<!-- ############ Content END-->
@endsection