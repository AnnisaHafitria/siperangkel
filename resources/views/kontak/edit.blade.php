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
Data Kontak
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Ubah Kontak
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="{{route('kontak.index')}}"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="{{ route('kontak.update', $kontak->id) }}" method="post" enctype="multipart/form-data">
          <input name="_method" type="hidden" value="PATCH">
          {{csrf_field()}}
          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Foto</label>
            <br>
            @if (isset($kontak) && $kontak->foto)
            <p>
              <img src="{{ asset('assets/img/foto/'.$kontak->foto )}}" style="max-height:125px;max-width:125px;margin-top:7px;" alt="">
            </p>
            @endif 
            <br>
            <input type="file" name="foto" value="{{ $kontak->foto }}">
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nama kontak</label> 
            <input type="text" name="nama_kontak" class="form-control" value="{{ $kontak->nama_kontak }}" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Jabatan</label> 
            <input type="text" name="jabatan" class="form-control number_only" value="{{ $kontak->jabatan }}" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">No HP</label> 
            <input type="text" name="nope" class="form-control" value="{{ $kontak->nope }}" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Email</label> 
            <input type="text" name="email" class="form-control" value="{{ $kontak->email }}" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Facebook</label> 
            <input type="text" name="facebook" class="form-control" value="{{ $kontak->facebook }}" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Instagram</label> 
            <input type="text" name="instagram" class="form-control" value="{{ $kontak->instagram }}" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Alamat</label> 
            <input type="text" name="alamat" class="form-control" value="{{ $kontak->alamat }}" required>
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
<script></script>
@endpush