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
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Peminjaman
        <div class="float-right">
          <a class="btn btn-xs btn-outline-primary badge-pill" href="{{route('peminjaman.create')}}"><i class="zmdi zmdi-collection-plus"></i> Tambah</a>
          <a class="btn btn-xs btn-outline-danger badge-pill" href="{{route('peminjaman.expor')}}"><i class="zmdi zmdi-square-down"></i> PDF</a>
          <a class="btn btn-xs btn-outline-success badge-pill" href="{{route('peminjaman.ekspor')}}"><i class="zmdi zmdi-download"></i> Excel</a>
        </div>
      </h2>
      <div class="card-body">
        <table id="myTable" class="table table-hover table-bordered">
          <thead class="thead-default" style="background-color:#2196F3">
            <tr>
              <th><font face color="white">No</th>
              <th><font face color="white">Nama Peminjam</th>
              <th><font face color="white">Barang Pinjaman</th>
              <th><font face color="white">Jumlah Pinjam</th>
              <th><font face color="white">Jadwal</font></th>
              <th><font face color="white">Berlaku Dari</th>
              <th><font face color="white">Berakhir Pada</th>
              <th><font face color="white">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1; ?>
            @php $no = 1; @endphp
            @foreach($peminjaman as $data)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->Anggota->nama_anggota }}</td>
              <td>{{ $data->Barang->nama_barang }}</td>
              <td>{{ $data->jumlah_pinjam }}</td>
              <td>{{ $data->jadwal }}</td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->created_at))?></td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->tanggal_batas))?></td>
              <td><a class="btn btn-xs btn-outline-secondary badge-pill" href="{{ route('peminjaman.show',$data->id) }}"><i class="zmdi zmdi-mood"></i> Lihat</a></td>
            </tr>
            @endforeach 
          </tbody>
        </table>
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
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>
@endpush