@extends('layouts.admin')
@section('title')
    Transaction
@endsection
@section('content')
<div id="content" class="flex ">
    @include('alert.failed')

                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Buat Transaksi</h2>
                                <small class="text-muted">silahkan pilih sparpart</small>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            {{-- <strong>Data Sparepart</strong> --}}
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('transaction-sparepart') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label id="customer_name" class="text-muted">Nama Pembeli</label>
                                                        <input type="text" id="customer_name" name="customer_name" required class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mt-1">
                                                        <div >
                                                            <a href="#" class="addberkas btn btn-primary">Tambah Sparepart</a>
                                                        </div>
                                                    </div>
                            
                                                    <div class="berkas col-12 mt-3"></div>
                                                </div>
                                               
                                                <button type="submit" class="btn btn-success mt-5 float-right">Submit</button>
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
@push('addon-script')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript">
      $('.addberkas').on('click',function(){
        addberkas();
      });
      function addberkas(){
        var berkas = '<div><div class="form-group col-md-12"> <label for="name_sparepart" id="name_sparepart" class=" name_sparepart text-muted d-block">Nama sparepart</label><select name="name_sparepart[]" class="name_sparepart custom-select" required> <option selected>Pilih...</option> @foreach ($spareparts as $spareparts )<option value="{{ $spareparts->id }}">{{ $spareparts->name_sparepart }} (Rp. {{ $spareparts->selling_price }}) (Stok {{ $spareparts->stock_sparepart }})  </option> @endforeach </select> </div> <div class="col-md-12"><div class="form-group"><label>Jumlah</label> <input type="number" name="qty[]" class="qty form-control" required></div> </div><div class="col-md-12"><div class="form-group"><a href="#" class="remove btn btn-danger mt-3 mb-5" style="float:rigth">Hapus</a></div></div>';
        $('.berkas').append(berkas);
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
{{-- $(document).on('change', '.qty', function(){
                        
    var qty = $(this).val();
    console.log(qty)
    $('.grand_price').val(qty * price);
}) --}}