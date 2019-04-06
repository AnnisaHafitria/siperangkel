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

<form method="post" action="<?php echo e(url('almarhum/save')); ?>">
  <?php echo e(csrf_field()); ?>

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Data Pemohon</h3>
        </div>
        <div class="card-body">

          <div class="form-group <?php echo e($errors->has('ktp_pemohon') ? ' has-error' : ''); ?>">
            <label class="control-label">No KTP</label>  
            <input type="text" name="ktp_pemohon" class="form-control"  required>
            <?php if($errors->has('ktp_pemohon')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('ktp_pemohon')); ?></strong>
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

          <span>
            <h5>Alamat Lengkap</h5>
          </span>
          <br>

          <div class="form-group">
            <label>Provinsi</label>
              <select class="select2">   
                <option value="jabar">Jawa Barat</option>
                <option value="jateng">Jawa Tengah</option>
                <option value="jatim">Jawa Timur</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kabupaten / Kota</label>
              <select class="select2">
                <option value="bdg">Bandung</option>
                <option value="smrg">Semarang</option>
                <option value="grsk">Gresik</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kecamatan</label>
              <select class="select2">
                <option value="dyk">Dayeuh Kolot</option>
                <option value="srng">Soreang</option>
                <option value="blndh">Baleendah</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kelurahan / Desa</label>
              <select class="select2">
                <option value="psw">Pasawahan</option>
                <option value="wts">Wates</option>
                <option value="rb">Ranca Buaya</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group <?php echo e($errors->has('alamat_pemohon') ? ' has-error' : ''); ?>">
            <label>Alamat Pemohon</label>
            <textarea class="form-control" name="alamat_pemohon"></textarea> 
            <i class="form-group__bar"></i>
            <?php if($errors->has('alamat_pemohon')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('alamat_pemohon')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('kode_pos_pemohon') ? ' has-error' : ''); ?>">
            <label class="control-label">Kode Pos</label>  
            <input type="text" name="kode_pos_pemohon" class="form-control"  required>
            <?php if($errors->has('kode_pos_pemohon')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('kode_pos_pemohon')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('tlp_pemohon') ? ' has-error' : ''); ?>">
            <label class="control-label">No Telepon Pemohon</label>  
            <input type="text" name="tlp_pemohon" class="form-control"  required>
            <?php if($errors->has('tlp_pemohon')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('tlp_pemohon')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('email_pemohon') ? ' has-error' : ''); ?>">
            <label class="control-label">Email Pemohon</label>  
            <input type="text" name="email_pemohon" class="form-control"  required>
            <?php if($errors->has('email_pemohon')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('email_pemohon')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Data Ahli Waris</h3>
        </div>

        <div class="card-body">
          <div class="form-group <?php echo e($errors->has('ktp_ahli_waris') ? ' has-error' : ''); ?>">
            <label class="control-label">No KTP</label>  
            <input type="text" name="ktp_ahli_waris" class="form-control"  required>
            <?php if($errors->has('ktp_ahli_waris')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('ktp_ahli_waris')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('nama_ahli_waris') ? ' has-error' : ''); ?>">
            <label class="control-label">Nama Ahli Waris</label>  
            <input type="text" name="nama_ahli_waris" class="form-control"  required>
            <?php if($errors->has('nama_ahli_waris')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('nama_ahli_waris')); ?></strong>
            </span>   
            <?php endif; ?>              
          </div>

          <span>
            <h5>Alamat Lengkap</h5>
          </span>
          <br>

          <div class="form-group">
            <label>Provinsi</label>
              <select class="select2">   
                <option value="jabar">Jawa Barat</option>
                <option value="jateng">Jawa Tengah</option>
                <option value="jatim">Jawa Timur</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kabupaten / Kota</label>
              <select class="select2">
                <option value="bdg">Bandung</option>
                <option value="smrg">Semarang</option>
                <option value="grsk">Gresik</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kecamatan</label>
              <select class="select2">
                <option value="dyk">Dayeuh Kolot</option>
                <option value="srng">Soreang</option>
                <option value="blndh">Baleendah</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kelurahan / Desa</label>
              <select class="select2">
                <option value="psw">Pasawahan</option>
                <option value="wts">Wates</option>
                <option value="rb">Ranca Buaya</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group <?php echo e($errors->has('alamat_ahli_waris') ? ' has-error' : ''); ?>">
            <label>Alamat Ahli Waris</label>
            <textarea class="form-control" name="alamat_ahli_waris"></textarea> 
            <i class="form-group__bar"></i>
            <?php if($errors->has('alamat_ahli_waris')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('alamat_ahli_waris')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('kode_pos_ahli_waris') ? ' has-error' : ''); ?>">
            <label class="control-label">Kode Pos</label>  
            <input type="text" name="kode_pos_ahli_waris" class="form-control"  required>
            <?php if($errors->has('kode_pos_ahli_waris')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('kode_pos_ahliw')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('no_tlp_ahli_waris') ? ' has-error' : ''); ?>">
            <label class="control-label">No Telepon Ahli Waris</label>  
            <input type="text" name="no_tlp_ahli_waris" class="form-control"  required>
            <?php if($errors->has('no_tlp_ahli_waris')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('no_tlp_ahli_waris')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('email_ahli_waris') ? ' has-error' : ''); ?>">
            <label class="control-label">Email Ahli Waris</label>  
            <input type="text" name="email_ahli_waris" class="form-control"  required>
            <?php if($errors->has('email_ahli_waris')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('email_ahli_waris')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Data Almarhum</h3>
        </div>

        <div class="card-body">
          <div class="form-group <?php echo e($errors->has('nama_almarhum') ? ' has-error' : ''); ?>">
            <label class="control-label">Nama Almarhum</label>  
            <input type="text" name="nama_almarhum" class="form-control"  required>
            <?php if($errors->has('nama_almarhum')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('almarhum')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

             <h5>Tempat Lahir</h5>
          </span>
          <br>

          <div class="form-group">
            <label>Provinsi</label>
              <select class="select2">   
                <option value="jabar">Jawa Barat</option>
                <option value="jateng">Jawa Tengah</option>
                <option value="jatim">Jawa Timur</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kabupaten / Kota</label>
              <select class="select2">
                <option value="bdg">Bandung</option>
                <option value="smrg">Semarang</option>
                <option value="grsk">Gresik</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kecamatan</label>
              <select class="select2">
                <option value="dyk">Dayeuh Kolot</option>
                <option value="srng">Soreang</option>
                <option value="blndh">Baleendah</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group">
            <label>Kelurahan / Desa</label>
              <select class="select2">
                <option value="psw">Pasawahan</option>
                <option value="wts">Wates</option>
                <option value="rb">Ranca Buaya</option>
              </select>
              <i class="form-group__bar" ></i>
          </div>

          <div class="form-group <?php echo e($errors->has('tempat_lahir_almarhum') ? ' has-error' : ''); ?>">
            <label>Tempat Lahir</label>
            <textarea class="form-control" name="tempat_lahir_almarhum"></textarea> 
            <i class="form-group__bar"></i>
            <?php if($errors->has('tempat_lahir_almarhum')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('tempat_lahir_almarhum')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('kode_pos_almarhum') ? ' has-error' : ''); ?>">
            <label class="control-label">Kode Pos</label>  
            <input type="text" name="kode_pos_almarhum" class="form-control"  required>
            <?php if($errors->has('kode_pos_almarhum')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('kode_pos_almarhum')); ?></strong>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group <?php echo e($errors->has('tgl_lahir_almarhum') ? ' has-error' : ''); ?>">
            <label class="control-label">Tanggal Lahir</label>
            <input type="text" name="tgl_lahir_almarhum" class="form-control date"  required>
            <?php if($errors->has('tgl_lahir_almarhum')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('tgl_lahir_almarhum')); ?></strong>
            </span>
            <?php endif; ?>              
          </div>

          <div class="form-group <?php echo e($errors->has('tgl_meninggal_almarhum') ? ' has-error' : ''); ?>">
            <label class="control-label">Tanggal Meninggal</label>  
            <input type="text" name="tgl_meninggal_almarhum" class="form-control date"  required>
            <?php if($errors->has('tgl_meninggal_almarhum')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('tgl_meninggal_almarhum')); ?></strong>
            </span>
            <?php endif; ?>              
          </div>

          <div class="form-group <?php echo e($errors->has('tgl_dimakamkan_almarhum') ? ' has-error' : ''); ?>">
            <label class="control-label">Tanggal Di Makamkan</label>  
            <input type="text" name="tgl_dimakamkan_almarhum" class="form-control date"  required>
            <?php if($errors->has('tgl_dimakamkan_almarhum')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('tgl_dimakamkan_almarhum')); ?></strong>
            </span>
            <?php endif; ?>              
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Data Makam</h3>
        </div>

        <div class="card-body">
          <div class="form-group">
            <label>Nama TPU</label>
              <select class="select2" name="tpu_id">
                <?php $__currentLoopData = App\MasterTpu::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <?php if($errors->has('tpu_id')): ?>
              <span class="help-block">
              <strong><?php echo e($errors->first('tpu_id')); ?></strong>
              </span>
              <?php endif; ?>
              <i class="form-group__bar" >
              </i>
            </div>
         

          <div class="form-group">
            <label>Blok</label>
              <select class="select2" name="blok_id">
                <?php $__currentLoopData = App\MasterBlok::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <?php if($errors->has('blok_id')): ?>
              <span class="help-block">
              <strong><?php echo e($errors->first('blok_id')); ?></strong>
              </span>
              <?php endif; ?>
              <i class="form-group__bar" >
              </i>
            </div>

            <div class="form-group <?php echo e($errors->has('masa_berlaku') ? ' has-error' : ''); ?>">
              <label class="control-label">Masa Berlaku</label>
              <input type="text" name="masa_berlaku" class="form-control date"  required>
              <?php if($errors->has('masa_berlaku')): ?>
              <span class="help-block">
              <strong><?php echo e($errors->first('masa_berlaku')); ?></strong>
              </span>
              <?php endif; ?>              
          </div>

          <div class="form-group">
            <label>Status</label>
              <select class="select2" name="status">
                <option>Aktif</option>
                <option>Tidak Aktif</option>
              </select>
              <i class="form-group__bar" >
              </i>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
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
<script src="<?php echo e(asset('/dropzone/dropzone.js')); ?>"></script>
<script type="text/javascript">
  $(".date").flatpickr({
    nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
    prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'});
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>