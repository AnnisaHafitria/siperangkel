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
        @php $no = 1; @endphp
        @foreach($peminjamans as $peminjaman)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $peminjaman->Anggota->nama_anggota }}</td>
          <td>{{ $peminjaman->Barang->nama_barang }}</td>
          <td>{{ $peminjaman->jumlah_pinjam }}</td>
          <td>{{ $peminjaman->jadwal }}</td>
          <td><?php echo date('d/m/Y h:i:s', strtotime($peminjaman->created_at))?></td>
          <td><?php echo date('d/m/Y h:i:s', strtotime($peminjaman->tanggal_batas))?></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>