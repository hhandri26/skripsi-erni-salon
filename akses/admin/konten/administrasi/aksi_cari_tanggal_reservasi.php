<?php

$cari_tanggal = $_POST['cari_tanggal'];
$tanggal_sekarang = date('Y-m-d');
if ($cari_tanggal < $tanggal_sekarang) {
  ?>
  <script>
  alert('Tanggal pemesanan tidak valid!');
  window.location.href="?p=reservasi";
  </script>
  <?php
}
else {

}
$queryhasil_cari = "SELECT waktu_pemesanan FROM transaksi_detail WHERE tanggal_pemesanan = '$cari_tanggal'";
$sql_hasil_cari = $mysqli->query($queryhasil_cari);
$waktu = array();
while ($hasil = $sql_hasil_cari->fetch_array()) {
  $waktu[] = $hasil['waktu_pemesanan'];
}

$query = "SELECT max(kode_transaksi) as maxKode FROM transaksi";
$hasil = $mysqli->query($query);
$data  = mysqli_fetch_array($hasil);
$kodeTrans = $data['maxKode'];
$noUrut = (int) substr($kodeTrans, 3, 6);
$noUrut++;
$char = "TRA";
$kode_transaksi = $char . sprintf("%06s", $noUrut);
//print_r($waktu);
?>

<div class="apps-content-item">
  <h3>Pilih Waktu</h3>
  <form action="konten/proses/aksi_cari_tanggal_reservasi.php" method="post">
  <?php
    for ($i=8; $i < 17; $i++) {
      if ($i<10) {
        $w = '0'.$i.':00:00';
      }
      else{
        $w = $i.':00:00';
      }
      ?>
          <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
          <input type="hidden" name="tanggal_pemesanan" value="<?php echo $cari_tanggal; ?>">
          <button name="waktu" value="<?php echo $w; ?>" class="inlineBlock" <?php if (in_array($w,$waktu)){echo "disabled";}?>><?php echo $w; ?></button>
          <!--a href="?p=resSELECT * FROM transaksi_detail WHERE tanggal_pemesanan = '$cari_tanggal'ervasi_fix&w=<?php echo $w; ?>"><?php echo $w; ?></a-->

      <?php
    }
   ?>
   </form>



</div>
