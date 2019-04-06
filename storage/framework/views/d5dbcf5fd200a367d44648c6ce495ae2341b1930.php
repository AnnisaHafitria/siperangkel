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
    Data Blok
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h1>Master Blok</h1>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover" id="myTable">

          <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal"><i class="zmdi zmdi-plus"></i> Tambah</button>

        <!-- Modal -->
          <thead>
            <tr>
              <td>No</td>
              <td>Nama</td>
              <td>Aksi</td>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
<?php echo $__env->make('masterblok._modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
        ajax: "<?php echo e(route('list.blok')); ?>",
        columns: [
          {data: 'DT_Row_Index', name: 'DT_Row_Index'},
          {data: 'nama', name: 'nama'},
          {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
      });


</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>