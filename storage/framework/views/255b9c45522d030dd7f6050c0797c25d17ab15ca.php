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
Data Kontak
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Ubah Kontak
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="<?php echo e(route('kontak.index')); ?>"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="<?php echo e(route('kontak.update', $kontak->id)); ?>" method="post" enctype="multipart/form-data">
          <input name="_method" type="hidden" value="PATCH">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Foto</label>
            <br>
            <?php if(isset($kontak) && $kontak->foto): ?>
            <p>
              <img src="<?php echo e(asset('assets/img/foto/'.$kontak->foto )); ?>" style="max-height:125px;max-width:125px;margin-top:7px;" alt="">
            </p>
            <?php endif; ?> 
            <br>
            <input type="file" name="foto" value="<?php echo e($kontak->foto); ?>">
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nama kontak</label> 
            <input type="text" name="nama_kontak" class="form-control" value="<?php echo e($kontak->nama_kontak); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Jabatan</label> 
            <input type="text" name="jabatan" class="form-control number_only" value="<?php echo e($kontak->jabatan); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">No HP</label> 
            <input type="text" name="nope" class="form-control" value="<?php echo e($kontak->nope); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Email</label> 
            <input type="text" name="email" class="form-control" value="<?php echo e($kontak->email); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Facebook</label> 
            <input type="text" name="facebook" class="form-control" value="<?php echo e($kontak->facebook); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Instagram</label> 
            <input type="text" name="instagram" class="form-control" value="<?php echo e($kontak->instagram); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Alamat</label> 
            <input type="text" name="alamat" class="form-control" value="<?php echo e($kontak->alamat); ?>" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-xs btn-outline-success badge-pill"><i class="zmdi zmdi-save"></i> Simpan</button>
          </div>
        </form>
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
<script></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>