<?php
include '../../../koneksi/koneksi.php';
session_start();
$kode_servis = $_POST['kode_servis'];
$count = count($kode_servis);
$id_pelanggan = $_SESSION['id'];
$tanggal_transaksi = date('Y-m-d');
$waktu_input_transaksi = date('H:i');

$query = "SELECT max(kode_transaksi) as maxKode FROM transaksi";
$hasil = $mysqli->query($query);
$data  = mysqli_fetch_array($hasil);
$kodeTrans = $data['maxKode'];
$noUrut = (int) substr($kodeTrans, 3, 6);
$noUrut++;
$char = "TRA";
$kode_transaksi = $char . sprintf("%06s", $noUrut);

if (!empty($kode_servis)) {

    $queryinsert_transaksi = "INSERT INTO transaksi
      (
        kode_transaksi,
        id_pelanggan,
        tanggal_transaksi,
        waktu_input_transaksi,
        id_admin,
        status
      )
      VALUES
      (
        '$kode_transaksi',
        '$id_pelanggan',
        '$tanggal_transaksi',
        '$waktu_input_transaksi',
        '',
        'Pending'
      )
      ";
      $sqlinsert_transaksi = mysqli_query($mysqli,$queryinsert_transaksi);
      for ($i=0; $i < $count; $i++) {
        $queryinsert_transaksi_detail = "INSERT INTO transaksi_detail
        (
          kode_transaksi,
          kode_servis
        )
        VALUES
        (
          '$kode_transaksi',
          '$kode_servis[$i]'
        )
        ";
        $sqlinsert_transaksi_detail = mysqli_query($mysqli,$queryinsert_transaksi_detail);
      }
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=reservasi&idr=<?php echo $kode_transaksi; ?>";
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

?>
