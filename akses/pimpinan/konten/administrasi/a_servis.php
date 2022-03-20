<div class="apps-content-item">
<form action="konten/proses/aksi_reservasi.php" method="post">
  <h3>Pilih Tipe Servis Anda!</h3>
  <a href="index.php?p=d_administrasi&k=a_servis_tools&aksi=tambah" class="btn btn-default"><i class="fa fa-fw fa-plus" style="color:#000"></i>Tambah</a><hr>
  <table id="tbl">
    <tr>
      <th>No.</th>
      <th></th>
      <th width=15%>Nama Servis</th>
      <th>Keterangan</th>
      <th>Harga</th>
      <th width=10%>Opsi</th>
    </tr>
    <?php
      $no = 0;
      foreach ($sql_kategori as $key) {
        extract($key);
    ?>
    <tr>
      <th colspan="6" style="text-transform: uppercase; background-color:#ddd;"><?php echo $nama_kategori; ?></th>
    </tr>
    <?php
      $query_tipe = "SELECT * FROM tipe_servis WHERE id_kategori = '$id_kategori'";
      $sql_tipe = mysqli_query($mysqli,$query_tipe);
      foreach ($sql_tipe as $key) {
        extract($key);
      $no++;
    ?>
    <tr>
      <td width=5%><?php echo $no; ?></td>
      <td width="15%"><img src="../img/servis/<?php echo $gambar_servis; ?>" width=100%></td>
      <td style="text-transform:uppercase"><?php echo $nama_servis; ?></td>
      <td><?php echo $keterangan_servis; ?></td>
      <td><?php echo "Rp ".$harga_servis; ?></td>
      <td><a href="index.php?p=d_administrasi&k=a_servis_tools&ids=<?php echo $kode_servis; ?>&aksi=detail" title="Rincian Profile"><i class="fa fa-fw fa-arrow-circle-right"></i></a>
      <a href="index.php?p=d_administrasi&k=a_servis_tools&ids=<?php echo $kode_servis; ?>&aksi=edit" title="edit" title="Ubah Data pelanggan"><i class="fa fa-fw fa-edit"></i></a>
      <a href="index.php?p=d_administrasi&k=a_servis_tools&ids=<?php echo $kode_servis; ?>&aksi=hapus" title="hapus"
        onclick="javascript: return confirm('Anda yakin akan menghapus data servis <?php echo $kode_servis; ?>?')"
        style="color:red"><i class="fa fa-fw fa-trash"></i></a></td>
    </tr>
    <?php }} ?>
  </table>
</form>


</div>
