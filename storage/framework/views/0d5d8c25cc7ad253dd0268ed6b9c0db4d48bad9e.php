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
<style type="text/css">
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
    Tambah
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header"><h1>Tambah Petugas Penerima</h1></div>
        <div class="card-body">
        	<form action="<?php echo e(route('mastertp.store')); ?>" method="post" >
			  		<?php echo e(csrf_field()); ?>


			  		<div class="form-group <?php echo e($errors->has('nama_petugas') ? ' has-error' : ''); ?>">
			  			<label class="control-label">Nama Petugas</label>	
			  			<input type="text" name="nama_petugas" class="form-control"  required>
			  			<?php if($errors->has('nama_petugas')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('nama_petugas')); ?></strong>
                            </span>
                
                         <?php endif; ?>
                    </div>
			 
			  		<div class="form-group">
			  		<button type="submit" class="btn btn-success" href="<?php echo e(route('mastertp.index')); ?>"><i class="zmdi zmdi-save"></i> Simpan</button>
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
$(document).ready( function () {
    $('#myTable').DataTable();
} );
       
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>