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
    Data Almarhum
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3>Tambah Almarhum</h3>
      </div>
      <div class="card-body">

        <form method="post" >
            <?php echo e(csrf_field()); ?>

            <center><span><h4>Pemohon</h4></span></center>
            <div class="form-group <?php echo e($errors->has('no_ktp_pemohon') ? ' has-error' : ''); ?>">
              <label class="control-label">No KTP</label>  
              <input type="text" name="no_ktp_pemohon" class="form-control"  required>
              <?php if($errors->has('no_ktp_pemohon')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('no_ktp_pemohon')); ?></strong>
                            </span>
                
                         <?php endif; ?>
                            </div>
      
            <div class="form-group <?php echo e($errors->has('nama_pemohon') ? ' has-error' : ''); ?>">
              <label class="control-label">Nama Pemohon</label>  
              <input type="text" name="nama_pemohon" class="form-control"  required>
              <?php if($errors->has('nama_pemohon')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('nama_pemohon')); ?></strong>
                            </span>
                
                         <?php endif; ?>
                            </div>
            
            <div class="form-group">
              <label><h5>Alamat Lengkap</h5></label>
              <br>
                <label>Provinsi</label>
                <select  id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Jawa Barat</option>
                    <option value="Bogor">Jawa Tengah</option>
                    <option value="Depok">Jawa Timur</option>
                    <option value="Tangerang">Banten</option>
                    <option value="Bekasi">Sumatera Utara</option>
                    <option value="Bandung">Sumatra Barat</option>
                    <option value="Semarang">Nusa Tenggara Barat</option>
                    <option value="Yogyakarta">Nusa Tenggara Timur</option>
                    <option value="Surabaya">Lombok</option>
                    <option value="Surabaya">Papua</option>
                </select>
            </div>

             <div class="form-group">
                <label>Kabupaten</label>
                <select  id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Depok">Depok</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Surabaya">Surabaya</option>
                </select>
            </div>

            <div class="form-group">
                <label>Kecamatan</label>
                <select  id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Dayeuh Kolot</option>
                    <option value="Bogor">Baleendah</option>
                    <option value="Depok">Cimahi</option>
                    <option value="Tangerang">Ciparay</option>
                    <option value="Bekasi">Tarogong</option>
                </select>
            </div>

            <div class="form-group">
                <label>Desa / Kota</label>
                <select  id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Situtarate</option>
                    <option value="Bogor">Palasari</option>
                    <option value="Depok">Radio</option>
                </select>
            </div>

            <center><span><h4>Ahli Waris</h4></span></center>
            <div class="form-group <?php echo e($errors->has('no_ktp_pemohon') ? ' has-error' : ''); ?>">
              <label class="control-label">No KTP</label>  
              <input type="text" name="no_ktp_pemohon" class="form-control"  required>
              <?php if($errors->has('no_ktp_pemohon')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('no_ktp_pemohon')); ?></strong>
                            </span>
                
                         <?php endif; ?>
                            </div>
      
            <div class="form-group <?php echo e($errors->has('nama_pemohon') ? ' has-error' : ''); ?>">
              <label class="control-label">Nama Ahli Waris</label>  
              <input type="text" name="nama_pemohon" class="form-control"  required>
              <?php if($errors->has('nama_pemohon')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('nama_pemohon')); ?></strong>
                            </span>
                
                         <?php endif; ?>
                            </div>
            
            <div class="form-group">
              <label><h5>Alamat Lengkap</h5></label>
              <br>
                <label>Provinsi</label>
                <select  id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Jawa Barat</option>
                    <option value="Bogor">Jawa Tengah</option>
                    <option value="Depok">Jawa Timur</option>
                    <option value="Tangerang">Banten</option>
                    <option value="Bekasi">Sumatera Utara</option>
                    <option value="Bandung">Sumatra Barat</option>
                    <option value="Semarang">Nusa Tenggara Barat</option>
                    <option value="Yogyakarta">Nusa Tenggara Timur</option>
                    <option value="Surabaya">Lombok</option>
                    <option value="Surabaya">Papua</option>
                </select>
            </div>

             <div class="form-group">
                <label>Kabupaten</label>
                <select  id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Depok">Depok</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Surabaya">Surabaya</option>
                </select>
            </div>

            <div class="form-group">
                <label>Kecamatan</label>
                <select  id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Dayeuh Kolot</option>
                    <option value="Bogor">Baleendah</option>
                    <option value="Depok">Cimahi</option>
                    <option value="Tangerang">Ciparay</option>
                    <option value="Bekasi">Tarogong</option>
                </select>
            </div>

            <div class="form-group">
                <label>Desa / Kota</label>
                <select  id="kota" name="kota" class="form-control">
                    <option value=""></option>
                    <option value="Jakarta">Situtarate</option>
                    <option value="Bogor">Palasari</option>
                    <option value="Depok">Radio</option>
                </select>
            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan</button>
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