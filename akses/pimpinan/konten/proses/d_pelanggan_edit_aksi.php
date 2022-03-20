<?php
include '../../../koneksi/koneksi.php';
$tipe_edit = $_POST['tipe_edit'];
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email_pelanggan = $_POST['email_pelanggan'];
$tempat_lahir_pelanggan = $_POST['tempat_lahir_pelanggan'];
$tanggal_lahir_pelanggan = $_POST['tanggal_lahir_pelanggan'];
$agama_pelanggan = $_POST['agama_pelanggan'];
$alamat_pelanggan = $_POST['alamat_pelanggan'];
$jk_pelanggan = $_POST['jk_pelanggan'];
$tanggal_daftar = $_POST['tanggal_daftar'];


if (
  !empty($id_pelanggan) AND
  (!empty($nama_pelanggan)) AND
  (!empty($email_pelanggan)) AND
  (!empty($tempat_lahir_pelanggan)) AND
  (!empty($tanggal_lahir_pelanggan)) AND
  (!empty($agama_pelanggan)) AND
  (!empty($alamat_pelanggan)) AND
  (!empty($jk_pelanggan)) AND
  (!empty($tanggal_daftar))
) {
    if ($tipe_edit == 'edit') {

      $queryupdate_pelanggan = "UPDATE pelanggan SET
        nama_pelanggan = '$nama_pelanggan',
        email_pelanggan = '$email_pelanggan',
        tempat_lahir_pelanggan = '$tempat_lahir_pelanggan',
        tanggal_lahir_pelanggan = '$tanggal_lahir_pelanggan',
        alamat_pelanggan = '$alamat_pelanggan',
        agama_pelanggan = '$agama_pelanggan',
        jk_pelanggan = '$jk_pelanggan',
        tanggal_daftar = '$tanggal_daftar' WHERE id_pelanggan = '$id_pelanggan'";
      $sqlupdate_pelanggan = $mysqli->query($queryupdate_pelanggan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_pelanggan";
        </script>
      <?php
    }
    elseif ($tipe_edit == 'tambah') {
      $queryinsert_pelanggan = "INSERT INTO pelanggan
      (
        id_pelanggan,
        nama_pelanggan,
        email_pelanggan,
        tempat_lahir_pelanggan,
        tanggal_lahir_pelanggan,
        agama_pelanggan,
        alamat_pelanggan,
        password_pelanggan,
        jk_pelanggan,
        tanggal_daftar
      )
      VALUES
      (
        '$id_pelanggan',
        '$nama_pelanggan',
        '$email_pelanggan',
        '$tempat_lahir_pelanggan',
        '$tanggal_lahir_pelanggan',
        '$agama_pelanggan',
        '$alamat_pelanggan',
        '$tanggal_lahir_pelanggan',
        '$jk_pelanggan',
        '$tanggal_daftar'
      )
      ";
      $sqlinsert_pelanggan = mysqli_query($mysqli,$queryinsert_pelanggan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_pelanggan";
        </script>
      <?php
    }

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=d_pelanggan";
  </script>
  <?php
}

?>
