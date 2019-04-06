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
Data Tentang & Program
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Tentang & Program
        <div class="float-right">
          <a class="btn btn-xs btn-outline-primary badge-pill" href="{{route('tentang_program.create')}}"><i class="zmdi zmdi-plus"></i> Tambah</a>
        </div>
      </h2>
      <div class="card-body">
        <table id="myTable" class="table table-responsive table-hover table-bordered">
          <thead class="thead-default" style="background-color:#2196F3">
            <tr>
              <th><font face color="white">No</th>
              <th><font face color="white">Judul</th>
              <th><font face color="white">Deskripsi</th>
              <th><font face color="white">Ada Sejak</th>
              <th><font face color="white">Ubah Pada</th>
              <th><font face color="white" colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1; ?>
            @php $no = 1; @endphp
            @foreach($tentang_program as $data)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->judul }}</td>
              <td>{{ $data->deskripsi }}</td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->created_at))?></td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->updated_at))?></td>
              <td>
                <a class="btn btn-xs btn-outline-warning badge-pill" href="{{ route('tentang_program.edit',$data->id) }}"><i class="zmdi zmdi-edit"></i> Ubah</a>
                <form method="post" action="{{ route('tentang_program.destroy',$data->id) }}">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}">
                  <input type="hidden" name="_method" value="DELETE">
                  <button onclick="return confirm('Yakin Akan Menghapus Data Ini?')" type="submit" class="btn btn-xs btn-outline-danger badge-pill"><i class="zmdi zmdi-delete"></i> Hapus</button>{{csrf_field()}}
                </form>
              </td>
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
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
  $(".sl2").select2();
  $(".date").flatpickr({
    nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
    prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
  });
</script>
@endpush