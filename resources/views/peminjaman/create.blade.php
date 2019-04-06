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
Data Peminjaman
@endsection
@section('content')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Tambah Peminjaman
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="{{route('peminjaman.index')}}"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="{{route('peminjaman.store')}}" method="post" id="insert_form">
          {{csrf_field()}}
          <div class="table-responsive">
            <center>
              <table id="item_table" class="table table-hover table-bordered">
                <tr id="last" align="center">
                  <th style="background-color:#2196F3"><font color="white">Nama Peminjam</th>
                  <th style="background-color:#2196F3"><font color="white">Barang Pinjaman</th>
                  <th style="background-color:#2196F3"><font color="white">Jumlah Pinjam</th>
                  <th style="background-color:#2196f3"><font color="white">Jadwal</font></th>
                  <th style="background-color:#2196F3"><font color="white">Batas Waktu Peminjaman</th>
                  <th><button type="button" name="add" class="btn btn-outline-primary btn-xs badge-pill add" onclick="addrow()"><i class="zmdi zmdi-plus-circle"></i></button></th>
                </tr>
              </table>
            </center>
            <br>
            <div align="left">
              <button type="submit" name="submit" class="btn btn-outline-success btn-xs badge-pill" value="Pinjam"><i class="zmdi zmdi-book"></i> Pinjam</button>
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
      html +='<td><select name="id_anggota[]" class="form-control sl2">@foreach($anggota as $data)<option value="{{$data->id}}">{{$data->nama_anggota}}</option>@endforeach</select></td>';
      html +='<td><select name="id_barang[]" class="form-control sl2">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>';
      html +='<td><input type="number" name="jumlah_pinjam[]" class="form-control"/></td>';
      html +='<td><select name="jadwal[]" class="form-control sl2"><option value="">Pilih Jadwal</option><option name="bengkel">Bengkel</option><option name="tambahan">Tambahan</option></select></td>';
      html +='<td><input type="date" name="tanggal_batas[]" class="form-control date"/></td>';
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