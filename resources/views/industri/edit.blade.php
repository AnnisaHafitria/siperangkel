@extends('layouts.backend')
@push('styles')
<link rel="stylesheet" href="{{asset('vendors/bower_components/lightgallery/dist/css/lightgallery.min.css')}}">
<style type="text/css">
  .table thead tr th{
  vertical-align: middle;
  text-align: center;
  }
  .table tbody tr td{
  vertical-align: middle;
  text-align: center;
  }
  #data th, #data td {
  font-size: 11px;
  }
  .text-danger 
  {
  text-transform:capitalize;
  }
  .fc-time{
  display: none;
  }
</style>
<style type="text/css"></style>
@endpush
@section('title')
Data Industri
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Ubah Industri
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="{{route('industri.index')}}"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="{{ route('industri.update', $industri->id) }}" method="post" enctype="multipart/form-data">
          <input name="_method" type="hidden" value="PATCH">
          {{csrf_field()}}
          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Foto</label>
            <br>
            @if (isset($industri) && $industri->foto)
            <p>
              <img src="{{ asset('assets/img/foto/'.$industri->foto )}}" style="max-height:125px;max-width:125px;margin-top:7px;" alt="">
            </p>
            @endif 
            <br>
            <input type="file" name="foto" value="{{ $industri->foto }}">
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nama Industri</label> 
            <input type="text" name="nama_industri" class="form-control" value="{{ $industri->nama_industri }}" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Kerja Sama</label> 
            <input type="date" name="kerja_sama" class="form-control date" value="{{ $industri->kerja_sama }}" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Deskripsi</label> 
            <input type="text" name="deskripsi" class="form-control" value="{{ $industri->deskripsi }}" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-xs btn-outline-success badge-pill"><i class="zmdi zmdi-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')
<!-- Vendors: Data tables -->
<script src="{{asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.uploadPreview.min.js')}}"></script>
<script>
  //multiple insert
      $(".sl2").select2();
      $(".date").flatpickr({
        nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
        prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
      });
</script>
@endpush