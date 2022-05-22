@extends('layouts.admin')
@section('title')
    Produk
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Detail Sparepart</h2>
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
                                            <strong>Data Sparepart</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="#" method="POST" >
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nama Sparepart</label>
                                                        <input type="text" id="name_sparepart" name="name_sparepart" disabled value="{{ $sparepart->name_sparepart }}"  class="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Status</label>
                                                        <input type="text" id="name_sparepart" name="name_sparepart" disabled value="{{ $sparepart->status_sparepart }}"  class="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Stok</label>
                                                        <input type="number" id="stock_sparepart" name="stock_sparepart" disabled value="{{ $sparepart->stock_sparepart }}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Harga Beli</label>
                                                        <input type="number" id="purchase_price" name="purchase_price" disabled value="{{ $sparepart->purchase_price }}" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Harga Jual</label>
                                                        <input type="number" id="selling_price" name="selling_price" disabled value="{{ $sparepart->selling_price }}" class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class=text-muted">Description</label>
                                                        <textarea  class="form-control"  rows="12" id="description" disabled "> {{ $sparepart->description }} </textarea>
                                                    </div>
                                                    <div class="form-group custom-file">
                                                        {{-- <div class="form-group"> --}}
                                                            <label>Gambar</label>
                                                            <img src="{{ Storage::url($sparepart->foto_sparepart) }}" width="100%" alt="">
                                                        {{-- </div> --}}
                                                        {{-- <input type="file" class="custom-file-input" id="thumbnail">
                                                        <label class="custom-file-label" for="thumbnail">Pilih Thumbnail</label> --}}
                                                    </div>
                                                </div>
                                               
                                            </form>
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
