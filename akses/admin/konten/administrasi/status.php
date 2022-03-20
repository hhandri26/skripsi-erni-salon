<div class="apps-content-item">
<form action="?p=aksi_cari_tanggal_reservasi" method="post">
  <h2>Status Pembayaran</h2>
  <table id="tbl">
    <tr>
      <th>No.</th>
      <th>Kode Transaksi</th>
      <th>Nama Servis</th>
      <th>Tgl./Hari Perawatan</th>
      <th>Waktu Perawatan</th>
      <th>Harga</th>
    </tr>
    <?php
      $no = 0;
      $bayar = 0;
      foreach ($sqldetail_reservasi as $key) {
        extract($key);
        $no++;
        $bayar = $bayar+$harga_servis;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $kode_transaksi; ?> </td>
      <td><?php echo $nama_servis; ?></td>
      <td><?php echo $tanggal_pemesanan.", ".$hari_pemesanan; ?></td>
      <td><?php echo $waktu_pemesanan; ?></td>
      <td><?php echo "Rp ".$harga_servis; ?></td>
    </tr>
    <?php } ?>
    <tr>
      <th colspan="5">Total</th>
      <th><?php echo "Rp ".$bayar; ?></th>
    </tr>
  </table>
  <?php
    $tanggal_exp = mysqli_fetch_assoc($sql_reservasi);
    $jangka_waktu = strtotime('+1 days', strtotime($tanggal_exp['tanggal_transaksi']));// jangka waktu + 365 hari
    $tgl_exp=date("d M Y",$jangka_waktu);//tanggal expired
    //print_r($tanggal_exp);
   ?>
  <h4>Silahkan melakukan pembayaran dengan nominal Rp <?php echo $bayar; ?> pada rekening Mandiri kami di 1230006663886 a.n/ Salon Fira SEBELUM TANGGAL <?php echo $tgl_exp; ?>.</h4>
</form>


</div>
