<title>Laporan Barang</title>
<center>
  <h4>Data Barang</h4>
</center>
<table border="1" class="table table-responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Persediaan</th>
      <th>Kondisi</th>
      <th>Barang Telah Ada Sejak</th>
      <th>Barang Di Ubah Pada</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $no = 1; ?>
    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($no++); ?></td>
      <td><?php echo e($data->nama_barang); ?></td>
      <td><?php echo e($data->persediaan); ?> <?php echo e($data->satuan); ?></td>
      <td><?php echo e($data->kondisi); ?></td>
      <td><?php echo date('d/m/Y h:i:s', strtotime($dari))?></td>
      <td><?php echo date('d/m/Y h:i:s', strtotime($sampai))?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </tbody>
</table>
<br>
Laporan Barang Di Ambil Dari Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($dari))?> Sampai Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($sampai))?>