<?php
include '../../../koneksi/koneksi.php';
$tipe_edit = $_POST['tipe_edit'];
$id_pimpinan = $_POST['id_pimpinan'];
$nama_pimpinan = $_POST['nama_pimpinan'];
$email_pimpinan = $_POST['email_pimpinan'];
$tempat_lahir_pimpinan = $_POST['tempat_lahir_pimpinan'];
$tanggal_lahir_pimpinan = $_POST['tanggal_lahir_pimpinan'];
$agama_pimpinan = $_POST['agama_pimpinan'];
$alamat_pimpinan = $_POST['alamat_pimpinan'];
$jk_pimpinan = $_POST['jk_pimpinan'];


if (
  !empty($id_pimpinan) AND
  !empty($nama_pimpinan) AND
  !empty($email_pimpinan) AND
  !empty($tempat_lahir_pimpinan) AND
  !empty($tanggal_lahir_pimpinan) AND
  !empty($agama_pimpinan) AND
  !empty($alamat_pimpinan) AND
  !empty($jk_pimpinan)
) {
    if ($tipe_edit == 'edit') {

      $queryupdate_pimpinan = "UPDATE pimpinan SET
        nama_pimpinan = '$nama_pimpinan',
        email_pimpinan = '$email_pimpinan',
        tempat_lahir_pimpinan = '$tempat_lahir_pimpinan',
        tanggal_lahir_pimpinan = '$tanggal_lahir_pimpinan',
        alamat_pimpinan = '$alamat_pimpinan',
        agama_pimpinan = '$agama_pimpinan',
        jk_pimpinan = '$jk_pimpinan' WHERE id_pimpinan = '$id_pimpinan'";
      $sqlupdate_pimpinan = $mysqli->query($queryupdate_pimpinan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_pimpinan";
        </script>
      <?php
    }
    elseif ($tipe_edit == 'tambah') {
      $queryinsert_pimpinan = "INSERT INTO pimpinan
      (
        id_pimpinan,
        nama_pimpinan,
        email_pimpinan,
        tempat_lahir_pimpinan,
        tanggal_lahir_pimpinan,
        agama_pimpinan,
        alamat_pimpinan,
        password_pimpinan,
        jk_pimpinan
      )
      VALUES
      (
        '$id_pimpinan',
        '$nama_pimpinan',
        '$email_pimpinan',
        '$tempat_lahir_pimpinan',
        '$tanggal_lahir_pimpinan',
        '$agama_pimpinan',
        '$alamat_pimpinan',
        '$tanggal_lahir_pimpinan',
        '$jk_pimpinan'
      )
      ";
      $sqlinsert_pimpinan = mysqli_query($mysqli,$queryinsert_pimpinan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_pimpinan";
        </script>
      <?php
    }

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=d_pimpinan";
  </script>
  <?php
}

?>
