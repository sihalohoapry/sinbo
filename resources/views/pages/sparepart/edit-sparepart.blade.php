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
                                <h2 class="text-md text-highlight">Edit</h2>
                                <small class="text-muted">Silahkan Isi data dengan benar</small>
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
                                            <form action="{{ route('sparepart.update', $sparepart->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nama Sparepart</label>
                                                        <input type="text" id="name_sparepart" name="name_sparepart" value="{{ $sparepart->name_sparepart }}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="status_sparepart" id="status_sparepart" class="text-muted d-block">Status</label>
                                                        <select name="status_sparepart" class="custom-select">
                                                            <option selected>{{ $sparepart->status_sparepart }}</option>
                                                            <option value="AKTIF">AKTIF</option>
                                                            <option value="NON AKTIF">NON AKTIF</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Stok</label>
                                                        <input type="number" id="stock_sparepart" name="stock_sparepart" value="{{ $sparepart->stock_sparepart }}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Harga Beli</label>
                                                        <input type="number" id="purchase_price" name="purchase_price" value="{{ $sparepart->purchase_price }}" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-4">
                                                        <label class="text-muted">Harga Jual</label>
                                                        <input type="number" id="selling_price" name="selling_price" value="{{ $sparepart->selling_price }}" class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class=text-muted">Description</label>
                                                        <textarea id="event-desc" class="form-control" rows="12" id="description" name="description">{{ $sparepart->description }}</textarea>
                                                    </div>
                                                    <div class="form-group custom-file">
                                                        {{-- <div class="form-group"> --}}
                                                            <label>Gambar</label>
                                                            <input type="file" name="foto_sparepart" class="form-control"
                                                                placeholder="Photo">
                                                        {{-- </div> --}}
                                                        {{-- <input type="file" class="custom-file-input" id="thumbnail">
                                                        <label class="custom-file-label" for="thumbnail">Pilih Thumbnail</label> --}}
                                                    </div>
                                                </div>
                                               
                                                <button type="submit" class="btn btn-primary mt-5 float-right">Edit</button>
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
