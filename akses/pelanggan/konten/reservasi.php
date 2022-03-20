<div class="apps-content-item">
<form action="konten/proses/aksi_reservasi.php" method="post">
  <h3>Pilih Tipe Servis Anda!</h3>
  <table id="tbl">
    <tr>
      <th>No.</th>
      <th>Kode Transaksi</th>
      <th>Tanggal Transaksi</th>
      <th>Waktu</th>
      <th>Status</th>
      <th>Opsi</th>
    </tr>
    <?php
      $no = 0;
      foreach ($sql_reservasi_pl as $key) {
        extract($key);
        $no++;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $kode_transaksi; ?> </td>
      <td><?php echo $tanggal_transaksi; ?></td>
      <td><?php echo $waktu_input_transaksi; ?></td>
      <td><?php echo $status; ?></td>
      <td>
        <a href="index.php?p=reservasi_detail&tdr=<?php echo $kode_transaksi; ?>" title="Proses"> <i class="fa fa-fw fa-arrow-circle-right"></i>Proses</a>
        <a href="index.php?p=status&tdr=<?php echo $kode_transaksi; ?>" title="Proses"> <i class="fa fa-fw fa-arrow-circle-right"></i>Cek Pembayaran</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</form>


</div>
