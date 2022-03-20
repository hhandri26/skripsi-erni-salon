<?php
    include"../connection.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    $no_trans = $_POST['no_trans'];
    $sqlupdate = "UPDATE transaksi SET status_pembayaran='Payment Confirmed' WHERE no_transaksi = '$no_trans'";
    //mysqli_query($mysqli, $sqltrans);
    while ($mysqli->query($sqlupdate)){
      echo "<script>alert('Success');</script>";
      header('location:../index.php?p=req-order');
    }

     ?>
