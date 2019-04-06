<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" , user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Anggota</title>
</head>

<body>
    <center>
        <h4>Data Anggota</h4>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Induk Siswa</th>
                    <th>Nama Anggota</th>
                    <th>Jurusan</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Menjadi Anggota Sejak</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $anggotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($anggota->id); ?></td>
                    <td><?php echo e($anggota->nis); ?></td>
                    <td><?php echo e($anggota->nama_anggota); ?></td>
                    <td><?php echo e($anggota->jurusan); ?></td>
                    <td><?php echo e($anggota->nope); ?></td>
                    <td><?php echo e($anggota->alamat); ?></td>
                    <td><?php echo e($anggota->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
</body>
</html>