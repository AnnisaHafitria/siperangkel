<div class="modal" tabindex="-1" role="dialog" id="m_form">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <form id="f_anggota">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="type" id="type">
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nomor Induk Siswa</label> 
            <input type="number" name="nis" class="form-control" id="nis">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nama Anggota</label> 
            <input type="text" name="nama_anggota" class="form-control" id="nama_anggota">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Jurusan</label> 
            <input type="text" name="jurusan" class="form-control" id="jurusan">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">No HP</label> 
            <input type="text" name="nope" class="form-control" id="nope">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Alamat</label> 
            <input type="text" name="alamat" class="form-control" id="alamat">
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