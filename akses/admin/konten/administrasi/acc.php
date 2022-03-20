<?php
//include '../../../koneksi/koneksi.php';
//session_start();
$kode_transaksi = $_POST['tdr'];
//include '../../../controller.php';
//date_default_timezone_set('Asia/Jakarta');
$total_bayar = 0;
$waktu = date("H:i:s");
$tanggal = date("Y-m-d");
  foreach ($sqldetail_reservasi as $key) {
    extract($key);
    $total_bayar = $total_bayar + $harga_servis;
  }
if (!empty($kode_transaksi)) {

    $queryupdate_transaksi = "UPDATE transaksi SET
        status = 'Telah Dibayar'
        WHERE kode_transaksi = '$kode_transaksi';
      ";
      $sqlupdate_transaksi = mysqli_query($mysqli,$queryupdate_transaksi);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="?p=d_administrasi&k=a_transaksi";
          /*window.location.href="../../index.php?p=reservasi_detail&tdr=<?php echo $kode_transaksi; ?>";*/
        </script>
      <?php

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="?p=beranda";
  </script>
  <?php
}
?>
