<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Peminjaman</title>
  </head>
  <body>
  <center><h4>Data Peminjaman</h4></center>
    <table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Peminjam</th>
          <th>Barang Pinjaman</th>
          <th>Jumlah Pinjam</th>
          <th>Tanggal Peminjaman</th>
          <th>Batas Waktu Peminjaman</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $peminjamans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peminjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($peminjaman->id); ?></td>
          <td><?php echo e($peminjaman->Anggota->nama_anggota); ?></td>
          <td><?php echo e($peminjaman->Barang->nama_barang); ?></td>
          <td><?php echo e($peminjaman->jumlah_pinjam); ?></td>
          <td><?php echo e($peminjaman->created_at); ?></td>
          <td><?php echo e($peminjaman->tanggal_batas); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </body>
</html>