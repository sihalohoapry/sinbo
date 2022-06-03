@extends('layouts.admin')
@section('title')
    Service
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Detail Service</h2>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Detail data service</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="#"  >
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nama Customer</label>
                                                        <input type="text" id="name_sparepart" name="name_sparepart" disabled value="{{ $booking->User->name }}"  class="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Service Selesai</label>
                                                        <input type="text" id="name_sparepart" name="name_sparepart" disabled value="{{ $booking->updated_at}}"  class="">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="text-muted">Judul Booking</label>
                                                        <input type="text" id="title_booking" name="title_booking" value="{{ $booking->title_booking }}" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="text-muted">Total Keseluruhan</label>
                                                        <input type="text" id="title_booking" name="title_booking" value="Rp {{ $allTotal }}" readonly class="form-control">
                                                    </div>
                                                </div>
                                                
                                            </form>
                                            
                                            <h6 class="text-md text-highlight mt-4 mb-3">Jasa Service </h6>
                                            <div class="page-content page-container" id="page-content">
                                                <div class="padding pl-0 pr-0 pt-2 pb-0">
                                                    <div id="toolbar">
                                                    </div>
                                                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true"
                                                    data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                                        <thead>
                                                            <tr>
                                                                <th data-sortable="true" data-field="id">No</th>
                                                                <th data-sortable="true" data-field="owner">Service</th>
                                                                <th data-sortable="true" data-field="project">Harga jasa</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $no = 1;
                                                             @endphp
                                                            @foreach ($service as $row)
                                                            <tr class=" " >
                                                                <td class="flex">
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $no ++ }}
                                                                    </div>
                                                                </td>
                                                                <td class="flex">
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $row->name_service}}    
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $row->service_price}}    
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                            <p5 class="text-bold text-black mb-5" > Total Bayar service <b><strong>Rp{{ $totalService }}</strong></b></p5>
                                            </div>

                                            <h6 class="text-md text-highlight mt-5 mb-3">Sparepart yang di beli</h6>
                                            <div class="page-content page-container" id="page-content">
                                                <div class="padding pl-0 pr-0 pt-2 pb-0">
                                                    <div id="toolbar">
                                                    </div>
                                                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true"
                                                    data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                                        <thead>
                                                            <tr>
                                                                <th data-sortable="true" data-field="id">No</th>
                                                                <th data-sortable="true" data-field="owner">Nama Baranng</th>
                                                                <th data-sortable="true" data-field="project">Jumlah</th>
                                                                <th data-sortable="true" data-field="task">Harga/item</th>
                                                                <th data-sortable="true" data-field="finish">Total bayar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $no = 1;
                                                             @endphp
                                                            @foreach ($sparepart as $row)
                                                            <tr class=" " >
                                                                <td class="flex">
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $no ++ }}
                                                                    </div>
                                                                </td>
                                                                <td class="flex">
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $row->Sparepart->name_sparepart}}    
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="item-except text-muted text-sm h-1x">
                                                                        {{ $row->qty}}    
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <span class="item-amount text-sm ">
                                                                        {{ $row->price}}   
                                                                </span>
                                                                </td>
                                                                <td>
                                                                    <span class="item-amount text-sm [object Object]">
                                                                        {{ $row->grand_price}}   
                                                                </span>
                                                                </td>
                                                                
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                        <p5 class="text-bold "> Total bayar jasa service  <b>Rp {{ $totalOrderSpareparrt }}</b></p5>
                                                
                                            </div>

                                            <a href="{{ route('cetak-service', $booking->id) }}" class="btn btn-success mt-5 float-end">Cetak Transaction Service</a>

                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
@endsection
