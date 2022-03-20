<?php
include '../../../koneksi/koneksi.php';

$id_pimpinan = $_POST['id_pimpinan'];
$nama_pimpinan = $_POST['nama_pimpinan'];
$email_pimpinan = $_POST['email_pimpinan'];
$tempat_lahir_pimpinan = $_POST['tempat_lahir_pimpinan'];
$tanggal_lahir_pimpinan = $_POST['tanggal_lahir_pimpinan'];
$agama_pimpinan = $_POST['agama_pimpinan'];
$alamat_pimpinan = $_POST['alamat_pimpinan'];
$jk_pimpinan = $_POST['jk_pimpinan'];
$password_pimpinan = $_POST['password_pimpinan'];
$konfirmasi_password_pimpinan = $_POST['konfirmasi_password_pimpinan'];

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
    if ($password_pimpinan == $konfirmasi_password_pimpinan) {

      $queryupdate_pimpinan = "UPDATE pimpinan SET
        nama_pimpinan = '$nama_pimpinan',
        email_pimpinan = '$email_pimpinan',
        tempat_lahir_pimpinan = '$tempat_lahir_pimpinan',
        tanggal_lahir_pimpinan = '$tanggal_lahir_pimpinan',
        alamat_pimpinan = '$alamat_pimpinan',
        agama_pimpinan = '$agama_pimpinan',
        jk_pimpinan = '$jk_pimpinan',
        password_pimpinan = '$password_pimpinan' WHERE id_pimpinan = '$id_pimpinan'";
      $sqlupdate_pimpinan = $mysqli->query($queryupdate_pimpinan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=beranda";
        </script>
      <?php
    }
    else{
      ?>
        <script>
          alert('Mohon masukkan password dengan benar!');
          window.location.href="../../index.php?p=d_administrasi&k=a_ubah_profil";
        </script>
      <?php
    }

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=d_administrasi&k=a_ubah_profil";
  </script>
  <?php
}

?>
