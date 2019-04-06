<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>File Pengembalian</title>
</head>
<body>
<center><h4>Data Pengembalian</h4></center>
	<table border="1">
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Anggota</th>
			<th>Nama Barang</th>
            <th>Jumlah Pinjam</th>
            <th>Tanggal Peminjaman</th>
			<th>Batas Waktu Peminjaman</th>
            <th>Tanggal Pengembalian</th>
			<th>Denda</th>
		</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $pengembalians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengembalian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($pengembalian->id); ?></td>
				<td><?php echo e($pengembalian->Anggota->nama_anggota); ?></td>
				<td><?php echo e($pengembalian->Barang->nama_barang); ?></td>
                <td><?php echo e($pengembalian->jumlah_pinjam); ?></td>
                <td><?php echo e($pengembalian->tanggal_pinjam); ?></td>
                <td><?php echo e($pengembalian->tanggal_batas); ?></td>
				<td><?php echo e($pengembalian->tanggal_kembali); ?></td>
				<td>Rp.<?php echo e(number_format($pengembalian->denda)); ?>,-</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</body>
</html>