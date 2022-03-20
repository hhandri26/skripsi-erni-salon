<div class="apps-content-item">
<form action="konten/administrasi/cetak_tr.php" method="get">
  <h3>Pilih Bulan</h3>
  <input type="hidden" name="data" value="transaksi">
  <select name="periode-bl">
    <option value="">Semua</option>
    <?php for ($i=1; $i <= 12; $i++) {
      if ($i<10) {
        $j = "0".$i;
      }
      else {
        $j=$i;
      }
      ?>
    <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
    <?php } ?>
  </select>
  <button type="submit" value="Cari">Cari</button>
</form>


</div>
