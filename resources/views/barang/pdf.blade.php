<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Barang</title>
  </head>
  <body>
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
          <th>Barang Sudah Ada Sejak</th>
          <th>Barang Di Ubah Pada</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomor = 1; ?>
        @php $no = 1; @endphp
        @foreach($barangs as $barang)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $barang->nama_barang }}</td>
          <td>{{ $barang->persediaan }} {{$barang->satuan }}</td>
          <td>{{ $barang->kondisi }}</td>
          <td><?php echo date('d/m/Y h:i:s', strtotime($barang->created_at))?></td>
          <td><?php echo date('d/m/Y h:i:s', strtotime($barang->updated_at))?></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>