<title>Laporan Pengembalian</title>
<center>
  <h4>Data Pengembalian</h4>
</center>
<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Anggota</th>
      <th>Nama Barang</th>
      <th>Jumlah Pinjam</th>
      <th>Jadwal</th>
      <th>Tanggal Peminjaman</th>
      <th>Batas Waktu Peminjaman</th>
      <th>Tanggal Pengembalian</th>
      <th>Denda</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $no = 1; ?>
    <?php $__currentLoopData = $pengembalian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($no++); ?></td>
      <td><?php echo e($data->Anggota->nama_anggota); ?></td>
      <td><?php echo e($data->Barang->nama_barang); ?></td>
      <td><?php echo e($data->jumlah_pinjam); ?></td>
      <td><?php echo e($data->jadwal); ?></td>
      <td><?php echo date('d/m/Y h:i:s', strtotime($data->tanggal_pinjam))?></td>
      <td><?php echo date('d/m/Y h:i:s', strtotime($data->tanggal_batas))?></td>
      <td><?php echo date('d/m/Y h:i:s', strtotime($data->tanggal_kembali))?></td>
      <td>Rp.<?php echo e(number_format($data->denda)); ?>,-</td>
      <td><?php echo e($data->keterangan); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </tbody>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>Uang Denda</td>
    <td>Rp.<?php echo e(number_format($jumlah_denda)); ?>,-</td>
  </tr>
</table>
<br>
Laporan Pengembalian Di Ambil Dari Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($dari))?> Sampai Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($sampai))?>