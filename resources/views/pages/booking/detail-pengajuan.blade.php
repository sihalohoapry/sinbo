@extends('layouts.admin')
@section('title')
    Booking
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Detail Pengajuan</h2>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="$" >
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Judul Booking</label>
                                                        <input type="text" id="title_booking" name="title_booking" readonly value="{{ $data->title_booking }}" required class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label class="text-muted">Tanggal Pengajuan Service</label>
                                                        <input type="date" id="date_booking" name="date_booking" readonly value="{{ $data->date_booking }}" required class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label class="text-muted">Status Booking</label>
                                                        <input type="text" id="title_booking" name="title_booking" readonly value="{{ $data->status_booking }}" required class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-12">
                                                        <label id="description_booking" class=text-muted">Deskripsi Service</label>
                                                        <textarea id="event-desc" class="form-control" readonly name="description_booking" rows="12" id="description_booking" required ">{{ $data->description_booking }}</textarea>
                                                    </div>
                                                </div>
                                               
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    {{-- <div class="page-content page-container" id="page-content">

                        <div class="padding">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Event form</strong>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Title</label>
                                                <div class="col-sm-9">
                                                    <input id="event-title" type="text" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea id="event-desc" class="form-control" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3"></label>
                                                <div class="col-sm-9">
                                                    <button type="button" id="btn-save" class="btn gd-primary btn-rounded">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
@endsection
