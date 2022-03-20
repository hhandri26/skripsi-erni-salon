<div class="apps-content-item">
<form action="konten/proses/aksi_reservasi.php" method="post">
  <h3>Pilih Tipe Servis Anda!</h3>
  <table id="tbl">
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
      foreach ($sql_kategori as $key) {
        extract($key);
    ?>
    <tr>
      <th colspan="6" style="text-transform: uppercase; background-color:#ddd;"><?php echo $nama_kategori; ?></th>
    </tr>
    <?php
      $query_tipe = "SELECT * FROM tipe_servis WHERE id_kategori = '$id_kategori'";
      $sql_tipe = mysqli_query($mysqli,$query_tipe);
      foreach ($sql_tipe as $key) {
        extract($key);
      $no++;
    ?>
    <tr>
      <td> <input type="checkbox" name="kode_servis[]" value="<?php echo $kode_servis; ?>"> </td>
      <td><?php echo $no; ?></td>
      <td><img src="../img/servis/<?php echo $gambar_servis; ?>" width="50px"></td>
      <td><?php echo $nama_servis; ?></td>
      <td><?php echo $keterangan_servis; ?></td>
      <td><?php echo "Rp ".$harga_servis; ?></td>
    </tr>
    <?php }} ?>
  </table>
  <input type="submit" class="btn-login" value="Proses->">
</form>


</div>
