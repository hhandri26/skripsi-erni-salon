<div class="apps-content-item">
<form action="proses/aksi_reservasi.php" method="post">
<table id="table-hover">
  <tr>
    <th width="5%">Pilih</th>
    <th width="5%">No.</th>
    <th width="10%"></th>
    <th width="15%">Nama Servis</th>
    <th width="55%">Keterangan</th>
    <th>Harga</th>
  </tr>
  <?php
  $no = 0;
  foreach ($sql_servis as $key) {
    extract($key);
  $no++;
  ?>
  <tr>
    <td> <input type="checkbox" name="kode_servis" value="<?php echo $kode_servis; ?>"> </td>
    <td><?php echo $no; ?></td>
    <td><img src="img/servis/<?php echo $gambar_servis; ?>" width="50px"></td>
    <td><?php echo $nama_servis; ?></td>
    <td><?php echo $keterangan_servis; ?></td>
    <td><?php echo "Rp ".$harga_servis; ?></td>
  </tr>
<?php } ?>
</table>
</form>


</div>
