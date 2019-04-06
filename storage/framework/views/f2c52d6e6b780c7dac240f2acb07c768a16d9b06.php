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
<!-- <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h1>Tambah Blok</h1>
      </div>
      <div class="card-body">
        <form action="<?php echo e(route('masterblok.store')); ?>" method="post" >
          <?php echo e(csrf_field()); ?>

          <div class="form-group <?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
            <label class="control-label">Nama</label> 
            <input type="text" name="nama" class="form-control"  required>
            <?php if($errors->has('nama')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('nama')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success" href="<?php echo e(route('masterblok.index')); ?>"><i class="zmdi zmdi-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->
<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> <?php echo e(method_field('POST')); ?>

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>   
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-md-3 control-label">Email</label>
                      <div class="col-md-6">
                          <input type="email" id="email" name="email" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="photo" class="col-md-3 control-label">Photo</label>
                      <div class="col-md-6">
                          <input type="file" id="photo" name="photo" class="form-control">
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </form>
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

function addForm(){
        save_method ="add";
        $('input[name=_method]').val('POST');
        $('#modal-form form')[0].reset();
        $('modal-title').text('Tambah');
      }
       
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>