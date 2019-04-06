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
Data Testimoni
@endsection
@section('content')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Tambah Testimoni
        <div class="float-right">
          <a class="btn btn-outline-dark btn-xs badge-pill" href="{{route('testimoni.index')}}"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="{{route('testimoni.store')}}" method="post" id="insert_form">
          {{csrf_field()}}
          <div class="table-responsive">
            <center>
              <table id="item_table" class="table table-hover table-bordered">
                <tr id="last" align="center">
                  <th style="background-color:#2196F3"><font color="white">Jumlah</th>
                  <th style="background-color:#2196F3"><font color="white">Judul</th>
                  <th><button type="button" name="add" class="btn btn-outline-primary btn-xs badge-pill add" onclick="addrow()"><i class="zmdi zmdi-plus-circle"></i></button></th>
                </tr>
              </table>
            </center>
            <br>
            <div align="left">
              <button type="submit" name="submit" class="btn btn-outline-success btn-xs badge-pill" value="Simpan"><i class="zmdi zmdi-save"></i> Simpan</button>
            </div>
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
<script src="{{ asset('assets/bootstrap/js/select2.min.js') }}"></script>
<script>
  //multiple insert
    function addrow(){
      var no = $('#item_table tr').length;
      var html = '';
      html +='<tr id="row_'+no+'" align="center">';
      html +='<td><input type="text" name="jumlah[]" class="form-control"/></td>';
      html +='<td><input type="text" name="judul[]" class="form-control"/></td>';
      html +='<td><button type="button" class="btn btn-outline-danger btn-xs badge-pill" onclick="remove('+ no +')"><i class="zmdi zmdi-minus-circle"></i></button></td></tr>';
      $('#last').after(html);
      $('.sl2').select2();
      $('.date').flatpickr({
        nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
        prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
      });
    }
    function remove(no){
      $('#row_'+no).remove();
    }
</script>
@endpush