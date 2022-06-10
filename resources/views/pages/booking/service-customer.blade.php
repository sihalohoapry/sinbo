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
                                <h2 class="text-md text-highlight">Mulai Service </h2>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            Data Booking
                                        </div>
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
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nama Pembooking</label>
                                                        <input type="text" id="title_booking" name="title_booking" readonly value="{{ $data->User->name }}" required class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Nomer Pembooking</label>
                                                        <input type="text" id="title_booking" name="title_booking" readonly value="{{ $data->User->phone_number }}" required class="form-control">
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

                        <form action="{{ route('transaction-service', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            Jasa service
                                        </div>
                                        <div class="card-body">
                                                <div class="form-row">
                                                    <div class="col-md-6 mt-1">
                                                        <div >
                                                            <a href="#" class="addService btn btn-primary">Tambah Jasa</a>
                                                        </div>
                                                    </div>
                            
                                                    <div class="service col-12 mt-3"></div>
                                                </div>
                                               
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        
                        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            Sparepart Yang dibeli
                                        </div>
                                        <div class="card-body">
                                            
                                                <div class="form-row">
                                                    <div class="col-md-6 mt-1">
                                                        <div >
                                                            <a href="#" class="addberkas btn btn-primary">Tambah Sparepart</a>
                                                        </div>
                                                    </div>
                            
                                                    <div class="berkas col-12 mt-3"></div>
                                                </div>
                                               
                                                <button type="submit" class="btn btn-success mt-5 float-right">Submit</button>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                        </div>
                        
                    </div>

                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->

            
@endsection
@push('addon-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript">
      $('.addberkas').on('click',function(){
        addberkas();
      });
      function addberkas(){
        var berkas = '<div><div class="form-group col-md-12"> <label for="name_sparepart" id="name_sparepart" class=" name_sparepart text-muted d-block">Nama Jasa</label><select name="name_sparepart[]" class="name_sparepart custom-select" > <option selected>Pilih...</option> @foreach ($spareparts as $spareparts )<option value="{{ $spareparts->id }}">{{ $spareparts->name_sparepart }} (Rp. {{ $spareparts->selling_price }}) (Stok {{ $spareparts->stock_sparepart }})  </option> @endforeach </select> </div> <div class="col-md-12"><div class="form-group"><label>Jumlah</label> <input type="number" name="qty[]" class="qty form-control" ></div> </div><div class="col-md-12"><div class="form-group"><a href="#" class="remove btn btn-danger mt-3 mb-5" style="float:rigth">Hapus</a></div></div>';
        $('.berkas').append(berkas);
      };
      $('.remove').live('click',function(){
        $(this).parent().parent().parent().remove();
      });
  
 
 </script>
  <script type="text/javascript">
      $('.addService').on('click',function(){
        addService();
      });
      function addService(){
        var service = '<div><div class="col-md-12"><div class="form-group"><label>Nama Service</label> <input type="text" name="name_service[]" class=" form-control" required></div> </div><div class="col-md-12"><div class="form-group"><label>Harga</label> <input type="number" name="service_price[]" class="form-control" required></div> </div>  <div class="col-md-12"><div class="form-group"><a href="#" class="remove btn btn-danger mt-3 mb-5" style="float:rigth">Hapus</a></div></div>';
        $('.service').append(service);
      };
      $('.remove').live('click',function(){
        $(this).parent().parent().parent().remove();
      });
  
 
 </script>
    <script type="text/javascript">
        $(document).ready(function(){
          $(document).on('change', '.name_sparepart', function(){
            var id = $(this).val();
            var a = $(this).parent();
            var op = "";
            $.ajax({
                type:'get',
                url: '{!! URL::to('getPriceSparapart') !!}',
                data: {'id': id},
                dataType: 'json',
                success: function(data){
                    // console.log(data);
                    // var price = $('.price').val(data);
                    $index = $('.price').val(data);
                },
                error: function (){

                }
            });

          });

        })
        
      </script>
@endpush