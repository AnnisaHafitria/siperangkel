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
Data Barang
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Barang
        <div class="float-right">
          <a class="btn btn-xs btn-primary" href="<?php echo e(route('barang.create')); ?>"><i class="zmdi zmdi-plus-circle"></i> Tambah</a>
          <a class="btn btn-xs btn-danger" href="<?php echo e(route('barang.ekspor')); ?>"><i class="zmdi zmdi-square-down"></i> PDF</a>
          <a class="btn btn-xs btn-success" href="<?php echo e(route('barang.expor')); ?>"><i class="zmdi zmdi-download"></i> Excel</a>
        </div>
      </h2>
      <div class="card-body">
        <table id="myTable" class="table table-hover table-bordered">
          <thead class="thead-default" style="background-color:#2196F3">
            <tr>
              <th><font face color="white">No</th>
              <th><font face color="white">Nama Barang</th>
              <th><font face color="white">Persediaan</th>
              <th><font face color="white">Kondisi</th>
              <th><font face color="white">Foto</th>
              <th><font face color="white">Barang Telah Ada Sejak</th>
              <th><font face color="white">Barang Di Ubah Pada</th>
              <th><font face color="white">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1; ?>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($no++); ?></td>
				    	<td><?php echo e($data->nama_barang); ?></td>
				    	<td><?php echo e($data->persediaan); ?></td>
				    	<td><?php echo e($data->kondisi); ?></td>
              <td><img src="<?php echo e(asset('assets/img/foto/'.$data->foto)); ?>" style="max-height:125px;max-width:125px;margin-top:7px;"></td>
              <td><?php echo e($data->created_at); ?></td>
              <td><?php echo e($data->updated_at); ?></td>
              <td><a class="btn btn-xs btn-warning" href="<?php echo e(route('barang.edit',$data->id)); ?>"><i class="zmdi zmdi-edit"></i> Ubah</a></td>
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
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>