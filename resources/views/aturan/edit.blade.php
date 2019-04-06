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
Data Aturan
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Ubah Aturan
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="{{route('aturan.index')}}"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="{{ route('aturan.update',$aturan->id) }}" method="post">
          <input name="_method" type="hidden" value="PATCH">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Judul</label> 
            <input type="text" name="judul" value="{{ $aturan->judul }}" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Aturan</label> 
            <input type="text" name="aturan" value="{{ $aturan->aturan }}" class="form-control" required>
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