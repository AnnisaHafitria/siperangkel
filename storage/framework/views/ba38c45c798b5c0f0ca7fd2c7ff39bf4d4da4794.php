<title>Laporan Anggota</title>
<center>
  <h4>Data Anggota</h4>
</center>
<table border="1" class="table-responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Nomor Induk Siswa</th>
      <th>Nama Anggota</th>
      <th>Jenis Kelamin</th>
      <th>Jurusan</th>
      <th>No HP</th>
      <th>Alamat</th>
      <th>Menjadi Anggota Sejak</th>
      <th>Anggota Di Ubah Pada</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $no = 1; ?>
    <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($no++); ?></td>
      <td><?php echo e($data->nis); ?></td>
      <td><?php echo e($data->nama_anggota); ?></td>
      <td><?php echo e($data->jk); ?></td>
      <td><?php echo e($data->jurusan); ?></td>
      <td><?php echo e($data->nope); ?></td>
      <td><?php echo e($data->alamat); ?></td>
      <td><?php echo e($data->created_at); ?></td>
      <td><?php echo e($data->updated_at); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </tbody>
</table>
<br>
Laporan Anggota Di Ambil Dari Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($dari))?> Sampai Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($sampai))?>