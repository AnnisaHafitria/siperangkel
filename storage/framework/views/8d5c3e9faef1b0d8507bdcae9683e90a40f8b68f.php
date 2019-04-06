<div class="modal" tabindex="-1" role="dialog" id="m_form">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <form id="f_peminjaman">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="type" id="type">
          <div class="form-group">
            <label><font style="color:grey">Peminjam</label>
            <select class="form-control select2" name="nama_anggota">
              <?php $__currentLoopData = App\Anggota::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_anggota); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Barang</label> 
            <select class="form-control select2" name="nama_barang">
              <?php $__currentLoopData = App\Barang::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_barang); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Jumlah Pinjam</label> 
            <input type="number" name="jumlah_pinjam" class="form-control" id="jumlah_pinjam">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <button type="reset" style="display: none;" id="reset"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-xs btn-success" onclick="save()"><i class="zmdi zmdi-save"></i> Simpan</button>
        <button type="button" class="btn btn-xs btn-danger" data-dismiss="modal"><i class="zmdi zmdi-close-circle"></i> Batal</button>
      </div>
    </div>
  </div>
</div>