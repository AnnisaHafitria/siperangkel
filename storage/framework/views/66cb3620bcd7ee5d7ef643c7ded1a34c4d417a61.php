<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Barang</title>
  </head>
  <body>
  <center><h4>Data Barang</h4></center>
    <table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Persediaan</th>
          <th>Kondisi</th>
          <th>Barang Sudah Ada Sejak</th>
          <th>Barang Di Ubah Pada</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($barang->id); ?></td>
          <td><?php echo e($barang->nama_barang); ?></td>
          <td><?php echo e($barang->persediaan); ?></td>
          <td><?php echo e($barang->kondisi); ?></td>
          <td><?php echo e($barang->created_at); ?></td>
          <td><?php echo e($barang->updated_at); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </body>
</html>