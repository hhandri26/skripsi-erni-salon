<?php
include '../../../koneksi/koneksi.php';

$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$email_admin = $_POST['email_admin'];
$tempat_lahir_admin = $_POST['tempat_lahir_admin'];
$tanggal_lahir_admin = $_POST['tanggal_lahir_admin'];
$agama_admin = $_POST['agama_admin'];
$alamat_admin = $_POST['alamat_admin'];
$jk_admin = $_POST['jk_admin'];
$password_admin = $_POST['password_admin'];
$konfirmasi_password_admin = $_POST['konfirmasi_password_admin'];

if (
  !empty($id_admin) AND
  !empty($nama_admin) AND
  !empty($email_admin) AND
  !empty($tempat_lahir_admin) AND
  !empty($tanggal_lahir_admin) AND
  !empty($agama_admin) AND
  !empty($alamat_admin) AND
  !empty($jk_admin) AND
  !empty($id_jabatan)
) {
    if ($password_admin == $konfirmasi_password_admin) {

      $queryupdate_admin = "UPDATE admin SET
        nama_admin = '$nama_admin',
        email_admin = '$email_admin',
        tempat_lahir_admin = '$tempat_lahir_admin',
        tanggal_lahir_admin = '$tanggal_lahir_admin',
        alamat_admin = '$alamat_admin',
        agama_admin = '$agama_admin',
        jk_admin = '$jk_admin',
        password_admin = '$password_admin' WHERE id_admin = '$id_admin'";
      $sqlupdate_admin = $mysqli->query($queryupdate_admin);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=beranda";
        </script>
      <?php
    }
    else
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
