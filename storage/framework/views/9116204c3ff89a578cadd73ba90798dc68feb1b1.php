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
    Data Petugas Penerima
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h1>Master Petugas Penerima</h1>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover" id="myTable">

          <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="zmdi zmdi-plus"></i> Tambah</button>

        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
      </div>
      <div class="modal-body">
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
                  </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-save" href="<?php echo e(route('mastertp.create')); ?>"><i class="zmdi zmdi-save"></i> Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="zmdi zmdi-close"></i> Batal</button>
      </div>
    </div>
  </div>
</div>
          <thead>
            <tr>
              <td>No</td>
              <td>Nama Petugas</td>
              <td>Aksi</td>
            </tr>
          </thead>
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

 var table = $('#myTable').DataTable({
                      processing: true,
                      serverSide: true,
                      ajax: "<?php echo e(route('list.tp')); ?>",
                      columns: [
                        {data: 'DT_Row_Index', name: 'DT_Row_Index'},
                        {data: 'nama_petugas', name: 'nama_petugas'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                      ]
                    });  
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>