<div class="apps-content-item">
<form action="konten/proses/aksi_fixasi.php" method="post">
  <h3>Pilih Tipe Servis Anda!</h3>
  <table id="tbl">
    <tr>
      <th>No.</th>
      <th>Kode Transaksi</th>
      <th>Nama Servis</th>
      <th>Tgl./Hari Perawatan</th>
      <th>Waktu Perawatan</th>
      <th>Opsi</th>
    </tr>
    <?php
      $no = 0;
      foreach ($sqldetail_reservasi as $key) {
        extract($key);
        $no++;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $kode_transaksi; ?> </td>
      <td><?php echo $nama_servis; ?></td>
      <td><?php echo $tanggal_pemesanan.", ".$hari_pemesanan; ?></td>
      <td><?php echo $waktu_pemesanan; ?></td>
      <td>
        <a href="index.php?p=d_administrasi&k=reservasi_detail_cari_tanggal&tdr=<?php echo $id; ?>" title="Proses"> <i class="fa fa-fw fa-arrow-circle-right"></i>Pilih Waktu</a>
      </td>
    </tr>
    <?php } ?>
  </table>
  <input type="hidden" class="btn-login" name="tdr" value="<?php echo $kode_transaksi; ?> ">
  <button type="submit" class="btn-login">Proses</button>
</form>


</div>
