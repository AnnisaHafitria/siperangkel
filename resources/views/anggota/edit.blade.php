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
Data Anggota
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Ubah Anggota
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="{{route('anggota.index')}}"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="{{ route('anggota.update',$anggota->id) }}" method="post">
          <input name="_method" type="hidden" value="PATCH">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nomor Induk Siswa</label> 
            <input type="number" name="nis" value="{{ $anggota->nis }}" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nama Anggota</label> 
            <input type="text" name="nama_anggota" value="{{ $anggota->nama_anggota }}" class="form-control" required>
          </div>
          <div class="form-group">
            <label><font style="color:grey">Jurusan</label>
            <select class="form-control sl2" name="jurusan" required>
              <option value="">Pilih Jurusan</option>
              <option name="rpl">Rekayasa Perangkat Lunak</option>
              <option name="tkr">Teknik Kendaraan Ringan</option>
              <option name="tsm">Teknik Sepeda Motor</option>
            </select>
          </div>
          <div class="form-group">
            <label><font style="color:grey">Jenis Kelamin</label>
            <select class="form-control sl2" name="jk" required>
              <option value="">Pilih Jenis Kelamin</option>
              <option name="pr">Perempuan</option>
              <option name="laki">Laki Laki</option>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">No HP</label> 
            <input type="number" name="nope" value="{{ $anggota->nope }}" class="form-control number_only" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Alamat</label> 
            <input type="text" name="alamat" value="{{ $anggota->alamat }}" class="form-control" required>
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
    $(".sl2").select2();
    $(".date").flatpickr({
      nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
      prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
    });
</script>
@endpush