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
Data Anggota
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Ubah Anggota
        <div class="float-right">
          <a class="btn btn-xs btn-danger" href="<?php echo e(route('anggota.index')); ?>"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
        <div class="card-body">
            <form action="<?php echo e(route('anggota.update',$anggota->id)); ?>" method="post">
            <input name="_method" type="hidden" value="PATCH">
            <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nomor Induk Siswa</label> 
            <input type="number" name="nis" value="<?php echo e($anggota->nis); ?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nama Anggota</label> 
            <input type="text" name="nama_anggota" value="<?php echo e($anggota->nama_anggota); ?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label><font style="color:grey">Jurusan</label>
            <select class="form-control select2" name="jurusan" required>
                <option>Pilih Jurusan</option>
                <option name="rpl">Rekayasa Perangkat Lunak</option>
                <option name="tkr">Teknik Kendaraan Ringan</option>
                <option name="tsm">Teknik Sepeda Motor</option>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">No HP</label> 
            <input type="text" name="nope" value="<?php echo e($anggota->nope); ?>" class="form-control number_only" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Alamat</label> 
            <input type="text" name="alamat" value="<?php echo e($anggota->alamat); ?>" class="form-control" required>
          </div>
          <div class="form-group">
		        <button type="submit" class="btn btn-xs btn-success"><i class="zmdi zmdi-save"></i> Simpan</button>
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
<script>
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>