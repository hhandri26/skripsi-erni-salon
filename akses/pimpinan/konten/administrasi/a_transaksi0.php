<div class="apps-content-item">
<form action="konten/proses/aksi_trans.php" method="post">
  <h3>Pilih Tipe Servis Anda!</h3>
  <a href="index.php?p=d_administrasi&k=a_servis_tools&aksi=tambah" class="btn btn-default"><i class="fa fa-fw fa-plus" style="color:#000"></i>Tambah</a><hr>
  <table id="tbl">
    <tr>
      <th>No.</th>
      <th>Kode Transaksi</th>
      <th>ID Pelanggan</th>
      <th>Tanggal Transaksi</th>
      <th>Opsi</th>
    </tr>


    <?php
    $no = 0;
      foreach ($sql_reservasi as $key) {
        extract($key);
      $no++;
    ?>
    <tr>
      <td ><?php echo $no; ?></td>
      <td ><?php echo $kode_transaksi; ?></td>
      <td style="text-transform:uppercase"><?php echo $id_pelanggan; ?></td>
      <td><?php echo $tanggal_transaksi; ?></td>
      <td>
        <?php
          if ($status == "Pending") {
            ?>
            <a href="index.php?p=reservasi_detail&tdr=<?php echo $kode_transaksi; ?>" title="Proses"> <i class="fa fa-fw fa-arrow-circle-right"></i>Proses</a>
            <a href="index.php?p=status&tdr=<?php echo $kode_transaksi; ?>" title="Proses"> <i class="fa fa-fw fa-arrow-circle-right"></i>Cek Pembayaran</a>
            <?php
          }
          else {
            echo "$status";
          }
        ?>
    </tr>
    <?php } ?>
  </table>
</form>


</div>
