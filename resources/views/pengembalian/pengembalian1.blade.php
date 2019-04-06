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
Dokumentasi Pengembalian
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Laporan Pengembalian
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="{{URL::previous()}}"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="{{ url('admin/laporan/pengembalian/detail1') }}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-label"><font style="color:grey"> Dari Tanggal </label> 
            <input type="date" class="date" name="dari" value="{{$dari}}" readonly="">
            <label class="control-label"><font style="color:grey"> Sampai Tanggal </label> 
            <input type="date" class="date" name="sampai" value="{{$sampai}}" readonly="">&nbsp;
            <button type="submit" name="submit" class="btn btn-xs btn-outline-danger badge-pill" value="PDF"><i class="zmdi zmdi-square-down"></i> PDF</button>
          </div>
        </form>
        <center>
          <h1>Data Pengembalian</h1>
          <br>
          <h4>Dari Tanggal <?php echo date('d/m/Y h:i:s', strtotime($dari))?> Sampai Tanggal <?php echo date('d/m/Y h:i:s', strtotime($sampai))?></h4>
        </center>
        <table id="myTable" class="table table-hover">
          <thead class="thead-default" style="background-color:#2196F3">
            <tr>
              <th><font face color="white">No</th>
              <th><font face color="white">Nama Peminjam</th>
              <th><font face color="white">Barang Pinjaman</th>
              <th><font face color="white">Jumlah Pinjam</th>
              <th><font face color="white">Jadwal</th>
              <th><font face color="white">Tanggal Peminjaman</th>
              <th><font face color="white">Tanggal Batas Peminjaman</th>
              <th><font face color="white">Tanggal Pengembalian</th>
              <th><font face color="white">Denda</th>
              <th><font face color="white">Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1; ?>
            @php $no = 1; @endphp
            @foreach($pengembalian as $data)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->Anggota->nama_anggota }}</td>
              <td>{{ $data->Barang->nama_barang }}</td>
              <td>{{ $data->jumlah_pinjam }}</td>
              <td>{{ $data->jadwal }}</td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->tanggal_pinjam))?></td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->tanggal_batas))?></td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->tanggal_kembali))?></td>
              <td>Rp.{{number_format($data->denda)}},-</td>
              <td>{{ $data->keterangan }}</td>
            </tr>
            @endforeach 
          </tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Uang Denda</td>
            <td>Rp.{{number_format($jumlah_denda)}},-</td>
          </tr>
        </table>
        Laporan Pengembalian Di Ambil Dari Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($dari))?> Sampai Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($sampai))?>
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
  $(".date").flatpickr({
    nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
    prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
  });
  
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>
@endpush