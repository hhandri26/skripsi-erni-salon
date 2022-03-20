<?php
foreach ($sqlcek_reservasi as $key) {
  extract($key);
  $queryupdate_cek = "UPDATE transaksi SET
      status = 'Kadaluwarsa'
      WHERE kode_transaksi = '$kode_transaksi';
    ";
    $sqlupdate_cek = mysqli_query($mysqli,$queryupdate_cek);
}
 ?>
  <script>
    alert('Ada transaksi yang Kadaluwarsa, silahkan cek!');
    window.location.href="?p=reservasi&idr=<?php echo $_SESSION['id']; ?>";
  </script>
