<?php
    include"../connection.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['id'])) {
      ?>
      <script>
      alert('You Must Login First!');
      window.location.href="../index.php";
      </script><?php
    }
    else {

    $query = "SELECT max(no_transaksi) as maxKode FROM transaksi";
    $hasil = $mysqli->query($query);
    $row  = mysqli_fetch_array($hasil);
    $kodeTrans = $row['maxKode'];
    $noUrut = (int) substr($kodeTrans, 4, 4);
    $noUrut++;
    $char = "TR";
    $newID = $char . sprintf("%04s", $noUrut);
    $date = date('Y-m-d');
    $total = $_POST['total'];
    $id_pelanggan = $_SESSION['id'];
    $sqltrans = "INSERT INTO transaksi (no_transaksi, tgl_beli, total_bayar, id_pelanggan, status_pembayaran) VALUES ('$newID','$date','$total','$id_pelanggan','Waiting Payment')";
    //mysqli_query($mysqli, $sqltrans);
    while ($mysqli->query($sqltrans)){

    foreach ($_POST['id_buku'] as $key => $value) {
      $id = $_POST['id_buku'][$key];
      $judul_buku = $_POST['judul_buku'][$key];
      $harga_buku = $_POST['harga_buku'][$key];
      $qty = $_POST['qty'][$key];
      $sub = $_POST['sub'][$key];
      $querystok = "SELECT stok FROM buku WHERE id_buku = '$id' ";
      $hasilstok = mysqli_query($mysqli,$querystok);
      $rsstok = mysqli_fetch_array($hasilstok);
      $stok = $rsstok['stok'];
      $restok = $stok - $qty;



      $sqlupdate = "INSERT INTO detail_transaksi (no_transaksi, id_buku, jumlah_beli, subtotal) VALUES ('$newID','$id','$qty','$sub')";
      $sqlstok ="UPDATE buku SET stok = '$restok' WHERE id_buku = '$id' ";
      //mysqli_query($mysqli, $sqlupdate);
      // INSERT INTO detail_transaksi(no_transaksi, id_buku, jumlah_beli, subtotal, status_pembayaran) VALUES('TR0001','SC0001','Exp','3','10000','Belum Lunas')
      $mysqli->query($sqlupdate);
      $mysqli->query($sqlstok);
      //echo "$newID",",$id",",$qty",",$sub",",belum lunas";
    }}


    unset($_SESSION['items']);
    header('location:../index.php?p=req-order');
  }
     ?>
