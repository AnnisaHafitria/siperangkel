<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" , user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Anggota</title>
  </head>
  <body>
    <center>
    <h4>Data Anggota</h4>
    <table border="1" class="table table-responsive">
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
        <?php $__currentLoopData = $anggotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($data->nis); ?></td>
          <td><?php echo e($data->nama_anggota); ?></td>
          <td><?php echo e($data->jk); ?></td>
          <td><?php echo e($data->jurusan); ?></td>
          <td><?php echo e($data->nope); ?></td>
          <td><?php echo e($data->alamat); ?></td>
          <td><?php echo date('d/m/Y h:i:s', strtotime($data->created_at))?></td>
          <td><?php echo date('d/m/Y h:i:s', strtotime($data->updated_at))?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </body>
</html>