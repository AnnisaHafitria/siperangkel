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
Data Peminjaman
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Lihat Peminjaman
        <div class="float-right">
          <a class="btn btn-xs btn-danger" href="<?php echo e(route('peminjaman.index')); ?>"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
        <div class="card-body">
            <form action="<?php echo e(route('peminjaman.update',$peminjaman->id)); ?>" method="post">
            <input name="_method" type="hidden" value="PATCH">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
				<input type="hidden" name="id_anggota" class="form-control" value="<?php echo e($peminjaman->Anggota->id); ?>"  readonly>
			</div>
			<div class="form-group">
				<input type="hidden" name="id_barang" class="form-control" value="<?php echo e($peminjaman->Barang->id); ?>"  readonly>
			</div>
            <div class="form-group">
                <label class="control-label">Nama Peminjam</label>
                <select class="form-control" name="id_anggota" disabled="">
					<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>" <?php if($peminjaman->id_anggota==$data->id)
                        echo "selected='selected'";?>><?php echo e($data->nama_anggota); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Barang Pinjaman</label>
                <select class="form-control" name="id_barang" disabled="">
					<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>" <?php if($peminjaman->id_barang==$data->id)
                        echo "selected='selected'";?>><?php echo e($data->nama_barang); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label"><font style="color:grey">Jumlah Pinjam</label> 
                <input type="number" name="jumlah_pinjam" value="<?php echo e($peminjaman->jumlah_pinjam); ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label class="control-label"><font style="color:grey">Tanggal Peminjaman</label> 
                <input type="text" name="tanggal_pinjam" value="<?php echo e($peminjaman->created_at); ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label class="control-label"><font style="color:grey">Batas Waktu Peminjaman</label> 
                <input type="text" name="tanggal_batas" value="<?php echo e($peminjaman->tanggal_batas); ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label class="control-label">Tanggal Pengembalian</label>  
                <input type="text" name="tanggal_kembali" class="form-control date">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-xs" style="background-color : deeppink"><i class="zmdi zmdi-caret-left-circle"></i> Kembalikan</button>
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
<script>// init flatpickr
  $(".date").flatpickr({
    nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
    prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>