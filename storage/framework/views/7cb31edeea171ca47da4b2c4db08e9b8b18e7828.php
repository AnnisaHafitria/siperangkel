<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('vendors/bower_components/lightgallery/dist/css/lightgallery.min.css')); ?>">
<link href="<?php echo e(asset('assets/bootstrap/css/select2.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/bootstrap/css/select2.min.css')); ?>" rel="stylesheet">
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
Dashboard Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header" style="background-color:#2196F3"><font face color="white">Selamat Datang</font></div>
      <div class="card-body">
        <?php if(session('status')): ?>
        <div class="alert alert-success">
          <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
        Assalaamualaikum Admin, Anda Telah Berada Di Halaman Website SiPeRangKel!.
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="stats__item">
      <div class="stats__chart bg-danger">
        <center><font color="white" size="10px"><i class="zmdi zmdi-account-circle"><br></i></font></center>
        <div class="flot-chart flot-chart--xs stats-chart-1" style="padding: 0px; position: relative;">
          <canvas class="flot-base" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
          <canvas class="flot-overlay" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
        </div>
      </div>
      <div class="stats__info">
        <div>
          <h2><?php echo e(($anggota)); ?></h2>
          <small>Anggota Terdaftar</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stats__item">
      <div class="stats__chart bg-warning">
        <center><font color="white" size="10px"><i class="zmdi zmdi-wrench"><br></i></font></center>
        <div class="flot-chart flot-chart--xs stats-chart-1" style="padding: 0px; position: relative;">
          <canvas class="flot-base" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
          <canvas class="flot-overlay" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
        </div>
      </div>
      <div class="stats__info">
        <div>
          <h2><?php echo e(($barang)); ?></h2>
          <small>Barang Tersedia</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stats__item">
      <div class="stats__chart bg-success">
        <center><font color="white" size="10px"><i class="zmdi zmdi-assignment"><br></i></font></center>
        <div class="flot-chart flot-chart--xs stats-chart-1" style="padding: 0px; position: relative;">
          <canvas class="flot-base" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
          <canvas class="flot-overlay" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
        </div>
      </div>
      <div class="stats__info">
        <div>
          <h2><?php echo e(($peminjaman)); ?></h2>
          <small>Transaksi Peminjaman</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stats__item">
      <div class="stats__chart bg-purple">
        <center><font color="white" size="10px"><i class="zmdi zmdi-assignment-check"><br></i></font></center>
        <div class="flot-chart flot-chart--xs stats-chart-1" style="padding: 0px; position: relative;">
          <canvas class="flot-base" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
          <canvas class="flot-overlay" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
        </div>
      </div>
      <div class="stats__info">
        <div>
          <h2><?php echo e(($pengembalian)); ?></h2>
          <small>Transaksi Pengembalian</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stats__item">
      <div class="stats__chart bg-pink">
        <center><font color="white" size="10px"><i class="zmdi zmdi-money-box"><br></i></font></center>
        <div class="flot-chart flot-chart--xs stats-chart-1" style="padding: 0px; position: relative;">
          <canvas class="flot-base" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
          <canvas class="flot-overlay" width="237" height="70" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 237px; height: 70px;"></canvas>
        </div>
      </div>
      <div class="stats__info">
        <div>
          <h2>Rp.<?php echo e(number_format($jumlah_denda)); ?>,-</h2>
          <small>Uang Denda</small>
        </div>
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
<script src="<?php echo e(asset('assets/bootstrap/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/js/select2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/js/select2.full.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/js/select2.full.min.js')); ?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
  $('.js-example-basic-multiple').select2();
  });
</script>
<script type="text/javascript" src="<?php echo e(asset('/js/jquery.uploadPreview.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>