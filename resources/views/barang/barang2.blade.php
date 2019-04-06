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
    @php $no = 1; @endphp
    @foreach($barang as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->nama_barang }}</td>
      <td>{{ $data->persediaan }} {{$data->satuan}}</td>
      <td>{{ $data->kondisi }}</td>
      <td><?php echo date('d/m/Y h:i:s', strtotime($dari))?></td>
      <td><?php echo date('d/m/Y h:i:s', strtotime($sampai))?></td>
    </tr>
    @endforeach 
  </tbody>
</table>
<br>
Laporan Barang Di Ambil Dari Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($dari))?> Sampai Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($sampai))?>