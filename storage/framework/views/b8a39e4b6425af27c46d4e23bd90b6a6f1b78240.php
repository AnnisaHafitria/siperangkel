<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Peminjaman</title>
  </head>
  <body>
    <center>
      <h4>Data Peminjaman</h4>
    </center>
    <table border="1" class="table table-responsive">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Anggota</th>
          <th>Nama Barang</th>
          <th>Jumlah Pinjam</th>
          <th>Jadwal</th>
          <th>Tanggal Peminjaman</th>
          <th>Batas Waktu Peminjaman</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomor = 1; ?>
        <?php $no = 1; ?>
        <?php $__currentLoopData = $peminjamans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peminjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($peminjaman->Anggota->nama_anggota); ?></td>
          <td><?php echo e($peminjaman->Barang->nama_barang); ?></td>
          <td><?php echo e($peminjaman->jumlah_pinjam); ?></td>
          <td><?php echo e($peminjaman->jadwal); ?></td>
          <td><?php echo date('d/m/Y h:i:s', strtotime($peminjaman->created_at))?></td>
          <td><?php echo date('d/m/Y h:i:s', strtotime($peminjaman->tanggal_batas))?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </body>
</html>