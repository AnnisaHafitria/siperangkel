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
        Lihat Peminjaman
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="{{route('peminjaman.index')}}"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="{{ route('peminjaman.update',$peminjaman->id) }}" method="post">
          <input name="_method" type="hidden" value="PATCH">
          {{csrf_field()}}
          <div class="form-group">
            <input type="hidden" name="id_anggota" class="form-control" value="{{ $peminjaman->Anggota->id }}"  readonly>
          </div>
          <div class="form-group">
            <input type="hidden" name="id_barang" class="form-control" value="{{ $peminjaman->Barang->id }}"  readonly>
          </div>
          <div class="form-group">
            <label class="control-label">Nama Peminjam</label>
            <select class="form-control" name="id_anggota" disabled="">
              @foreach($anggota as $data)
              <option value="{{$data->id}}" <?php if($peminjaman->id_anggota==$data->id)
                echo "selected='selected'";?>>{{$data->nama_anggota}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="control-label">Barang Pinjaman</label>
            <select class="form-control" name="id_barang" disabled="">
              @foreach($barang as $data)
              <option value="{{$data->id}}" <?php if($peminjaman->id_barang==$data->id)
                echo "selected='selected'";?>>{{$data->nama_barang}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Jumlah Pinjam</label> 
            <input type="number" name="jumlah_pinjam" value="{{ $peminjaman->jumlah_pinjam }}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Jadwal</label> 
            <input type="text" name="jadwal" value="{{ $peminjaman->jadwal }}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Tanggal Peminjaman</label> 
            <input type="text" name="tanggal_pinjam" value="{{ $peminjaman->created_at }}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Batas Waktu Peminjaman</label> 
            <input type="text" name="tanggal_batas" value="{{ $peminjaman->tanggal_batas }}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label class="control-label">Tanggal Pengembalian</label>  
            <input type="text" name="tanggal_kembali" class="form-control date">
          </div>
          <div class="form-group">
            <label><font style="color:grey">Keterangan</label>
            <select class="form-control select2" name="keterangan" required>
              <option value="">Pilih Keterangan</option>
              <option>Baik</option>
              <option>Rusak</option>
              <option>Hilang</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-success btn-xs badge-pill"><i class="zmdi zmdi-caret-left-circle"></i> Kembalikan</button>
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
<script>// init flatpickr
  $(".date").flatpickr({
    nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
    prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
  });
</script>
@endpush