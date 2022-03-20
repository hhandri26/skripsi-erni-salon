<?php
if (!empty($_SESSION['id'])) {
  $id_plg = $_SESSION['id'];
  $querycek_reservasi = "SELECT * FROM transaksi WHERE status != 'Selesai' AND id_pelanggan = '$id_plg' OR status != 'Kadaluwarsa' AND id_pelanggan = '$id_plg' order by kode_transaksi asc";
  $sqlcek_reservasi = $mysqli->query($querycek_reservasi);
}
$query_servis = "SELECT * FROM tipe_servis";
$sql_servis = mysqli_query($mysqli,$query_servis);

$query_kategori = "SELECT * FROM kategori_servis";
$sql_kategori = mysqli_query($mysqli,$query_kategori);

$query_pelanggan = "SELECT * FROM pelanggan";
$sql_pelanggan = mysqli_query($mysqli,$query_pelanggan);



$query_pimpinan = "SELECT * FROM pimpinan";
$sql_pimpinan = mysqli_query($mysqli,$query_pimpinan);

if (!empty($_SESSION['id'])) {
  $query_admin = "SELECT * FROM admin WHERE id_admin = '$_SESSION[id]' ";
  $sql_admin = mysqli_query($mysqli,$query_admin);
}
elseif (empty($_SESSION['id'])) {
  $query_admin = "SELECT * FROM admin";
  $sql_admin = mysqli_query($mysqli,$query_admin);
}
if (!empty($_SESSION['id'])) {
  $query_pimpinan = "SELECT * FROM pimpinan WHERE id_pimpinan = '$_SESSION[id]' ";
  $sql_pimpinan = mysqli_query($mysqli,$query_pimpinan);
  $query_reservasi_pl = "SELECT * FROM transaksi WHERE id_pelanggan = '$_SESSION[id]' order by kode_transaksi asc";
  $sql_reservasi_pl = $mysqli->query($query_reservasi_pl);
}
elseif (empty($_SESSION['id'])) {
  $query_pimpinan = "SELECT * FROM pimpinan";
  $sql_pimpinan = mysqli_query($mysqli,$query_pimpinan);
}


if ((!empty($_GET['tdr'])) OR (!empty($_GET['idr']))) {
  if (!empty($_GET['idr'])) {
    $idr = $_GET['idr'];
  }
  elseif (!empty($_GET['tdr'])) {
    $idr = $_GET['tdr'];
  }
  $query_reservasi = "SELECT * FROM transaksi WHERE kode_transaksi = '$idr' order by kode_transaksi asc";
  $sql_reservasi = $mysqli->query($query_reservasi);
}
elseif (empty($_GET['idr'])) {
  $query_reservasi = "SELECT * FROM transaksi order by kode_transaksi asc";
  $sql_reservasi = $mysqli->query($query_reservasi);
}



if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $queryedit_pelanggan = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id' order by id_pelanggan asc";
  $sqledit_pelanggan = $mysqli->query($queryedit_pelanggan);
  $queryedit_pimpinan = "SELECT * FROM pimpinan WHERE id_pimpinan = '$id' order by id_pimpinan asc";
  $sqledit_pimpinan = $mysqli->query($queryedit_pimpinan);
}


if (!empty($_GET['ids'])) {
  $ids = $_GET['ids'];
  $queryedit_servis = "SELECT * FROM tipe_servis WHERE kode_servis = '$ids' order by kode_servis asc";
  $sqledit_servis = $mysqli->query($queryedit_servis);
}

if ((!empty($_GET['tdr'])) OR (!empty($_POST['tdr']))) {
  if (!empty($_GET['tdr'])) {
    $tdr = $_GET['tdr'];
  }
  elseif (!empty($_POST['tdr'])) {
    $tdr = $_POST['tdr'];
  }
  $querydetail_reservasi = "SELECT * FROM transaksi_detail INNER JOIN tipe_servis ON `transaksi_detail`.`kode_servis` = `tipe_servis`.`kode_servis` WHERE `transaksi_detail`.`kode_transaksi` = '$tdr' order by kode_transaksi asc";
  $sqldetail_reservasi = $mysqli->query($querydetail_reservasi);
}
elseif (empty($_GET['tdr'])) {
  $querydetail_reservasi = "SELECT * FROM transaksi_detail order by kode_transaksi asc";
  $sqldetail_reservasi = $mysqli->query($querydetail_reservasi);
}
?>
