<?php
include '../../../koneksi/koneksi.php';
session_start();
$id = $_POST['id'];
$waktu_pemesanan = $_POST['waktu'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$day = date('D', strtotime($tanggal_pemesanan));
$dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
);


if (!empty($waktu_pemesanan)) {

    $queryupdate_transaksi = "UPDATE transaksi_detail SET

        tanggal_pemesanan = '$tanggal_pemesanan',
        hari_pemesanan = '$dayList[$day]',
        waktu_pemesanan = '$waktu_pemesanan'
        WHERE id = '$id';
      ";
      $sqlupdate_transaksi = mysqli_query($mysqli,$queryupdate_transaksi);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=reservasi";
          /*window.location.href="../../index.php?p=reservasi_detail&tdr=<?php echo $kode_transaksi; ?>";*/
        </script>
      <?php

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=beranda";
  </script>
  <?php
}
