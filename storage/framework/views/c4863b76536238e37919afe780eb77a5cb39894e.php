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
    Data Anggota
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">Peminjaman 
        <div class="float-right">
            <a href="<?php echo e(url('admin/transaksi/peminjaman/create')); ?>"> Tambah</button>
        </div>
      </h2>
      <div class="card-body">
        <table id="myTable" class="table table-condensed">
            <thead>
                <tr>
                    <th><font face color="white">No</th>
                    <th><font face color="white">Nama Anggota</th>
                    <th><font face color="white">Nama Barang</th>
                    <th><font face color="white">Jumlah Pinjam</th>
                    <th><font face color="white">Tanggal Pinjam</th>
                    <th><font face color="white">Aksi</th>
                </tr>
            </thead>
            <tbody>
				<?php $nomor = 1; ?>
				<?php $no = 1; ?>
				<?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
				    <td><?php echo e($no++); ?></td>
				    <td><?php echo e($data->Anggota->nama_anggota); ?></td>
					<td><?php echo e($data->Barang->nama_barang); ?></td>
					<td><?php echo e($data->jumlah_pinjam); ?></td>
					<td><?php echo e($data->created_at); ?></td>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>