<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('vendors/bower_components/lightgallery/dist/css/lightgallery.min.css')); ?>">
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
<?php $__env->stopPush(); ?>
<?php $__env->startSection('title'); ?>
Data Industri
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Industri
        <div class="float-right">
          <a class="btn btn-xs btn-outline-primary badge-pill" href="<?php echo e(route('industri.create')); ?>"><i class="zmdi zmdi-accounts-add"></i> Tambah</a>
        </div>
      </h2>
      <div class="card-body">
        <table id="myTable" class="table table-responsive table-hover table-bordered">
          <thead class="thead-default" style="background-color:#2196F3">
            <tr>
              <th><font face color="white">No</th>
              <th><font face color="white">Foto</th>
              <th><font face color="white">Nama Industri</th>
              <th><font face color="white">Kerja Sama</th>
              <th><font face color="white">Deskripsi</th>
              <th><font face color="white">Ada Sejak</th>
              <th><font face color="white">Di Ubah Pada</th>
              <th><font face color="white" colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1; ?>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $industri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($no++); ?></td>
              <td><img src="<?php echo e(asset('assets/img/foto/'.$data->foto)); ?>" style="max-height:125px;max-width:125px;margin-top:7px;"></</td>
              <td><?php echo e($data->nama_industri); ?></td>
              <td><?php echo e($data->kerja_sama); ?></td>
              <td><?php echo e($data->deskripsi); ?></td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->created_at))?></td>
              <td><?php echo date('d/m/Y h:i:s', strtotime($data->updated_at))?></td>
              <td>
                <a class="btn btn-xs btn-outline-warning badge-pill" href="<?php echo e(route('industri.edit',$data->id)); ?>"><i class="zmdi zmdi-edit"></i> Ubah</a>
                <form method="post" action="<?php echo e(route('industri.destroy',$data->id)); ?>">
                  <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                  <input type="hidden" name="_method" value="DELETE">
                  <button onclick="return confirm('Yakin Akan Menghapus Data Ini?')" type="submit" class="btn btn-xs btn-outline-danger badge-pill"><i class="zmdi zmdi-delete"></i> Hapus</button><?php echo e(csrf_field()); ?>

                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<!-- Vendors: Data tables -->
<script src="<?php echo e(asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/jszip/dist/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/js/jquery.uploadPreview.min.js')); ?>"></script>
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
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>