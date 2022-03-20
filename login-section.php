<?php

include ('koneksi/koneksi.php');
include 'akses/controller.php';
$id = $_POST['id_admin'];
$password = $_POST['password_admin'];
$akses = $_POST['akses'];
if ($akses == 'admin') {
  $query = mysqli_query($mysqli, "SELECT * FROM admin WHERE id_admin = '$id' AND password_admin='$password'");
}
elseif ($akses == 'pelanggan') {
  $query = mysqli_query($mysqli, "SELECT * FROM pelanggan WHERE id_pelanggan = '$id' AND password_pelanggan='$password'");
}
elseif ($akses == 'pimpinan') {
  $query = mysqli_query($mysqli, "SELECT * FROM pimpinan WHERE id_pimpinan = '$id' AND password_pimpinan='$password'");
}
else{
  ?>
  <script>
  alert('Anda harus mengisi data dengan benar !');
  window.location.href="login.php?p=login";
  </script>
  <?php
}

$ceklogin=mysqli_num_rows($query);
if ($ceklogin == 0) {
  ?>
  <script>
  alert('Data yang anda masukkan SALAH! Coba lagi!');
  window.location.href="login.php?";
  </script>
  <?php
}
else{
  $row = $query->fetch_array();
  if ($akses == 'admin') {
    session_start();
    $_SESSION['id'] = $row['id_admin'];
    $_SESSION['nama']= $row['nama_admin'];
    $_SESSION['hak'] = "admin";
    header('location:akses/admin/index.php');
  }
  elseif ($akses == 'pelanggan') {
    session_start();
    $_SESSION['id'] = $row['id_pelanggan'];
    $_SESSION['nama']= $row['nama_pelanggan'];
    $_SESSION['hak'] = "pelanggan";
    $tgl_sekarang=date("Y-m-d");//tanggal sekarang
    $tanggal_exp = mysqli_fetch_assoc($sqlcek_reservasi);
    $jangka_waktu = strtotime('+1 days', strtotime($tanggal_exp['tanggal_transaksi']));// jangka waktu + 365 hari
    $tgl_exp=date("Y-m-d",$jangka_waktu);
    if ($tgl_sekarang >=$tgl_exp ){
    header('location:akses/pelanggan/index.php?p=cek');
    }
    else {
      header('location:pelanggan/index.php');
    }
  }
  elseif ($akses == 'pimpinan') {
    session_start();
    $_SESSION['id'] = $row['id_pimpinan'];
    $_SESSION['nama']= $row['nama_pimpinan'];
    $_SESSION['hak'] = "pimpinan";
    header('location:akses/pimpinan/index.php');
  }
  else {
    ?>
    <script>
    alert('Kesalahan pada Database! Hubungi DBA?Programmer Untuk Fixasi!');
    window.location.href="index.php";
    </script>
    <?php
  }
}


?>
