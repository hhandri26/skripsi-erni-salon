<div class="apps-content-item">
<table id="tbl" width="100%">
  <tr>
    <th>No.</th>
    <th>ID</th>
    <th>Nama</th>
    <th>E-Mail</th>
    <th>JK</th>
    <th>Member Sejak</th>
    <th>Opsi</th>

  </tr>
  <?php
  $no = 0;
  foreach ($sql_pelanggan as $key) {
    extract($key);
  $no++;
  ?>
  <tr text-align="center">
    <td><?php echo $no; ?></td>
    <td><?php echo $id_pelanggan; ?></td>
    <td><?php echo $nama_pelanggan; ?></td>
    <td><?php echo $email_pelanggan; ?></td>
    <td><?php echo $jk_pelanggan; ?></td>
    <td><?php echo $tanggal_daftar; ?></td>
    <td>
     <a href="index.php?p=d_pelanggan_tools&id=<?php echo $id_pelanggan; ?>&aksi=detail" title="Rincian Profile"><i class="fa fa-fw fa-arrow-circle-right"></i></a>
     <a href="index.php?p=d_pelanggan_tools&id=<?php echo $id_pelanggan; ?>&aksi=edit" title="edit" title="Ubah Data pelanggan"><i class="fa fa-fw fa-edit"></i></a>
     <a href="index.php?p=d_pelanggan_tools&id=<?php echo $id_pelanggan; ?>&aksi=hapus" title="hapus"
       onclick="javascript: return confirm('Anda yakin akan menghapus data pelanggan <?php echo $id_pelanggan; ?>?')"
       style="color:red"><i class="fa fa-fw fa-trash"></i></a>
    </td>
  </tr>
<?php } ?>
</table>


<a href="index.php?p=d_pelanggan_tools&aksi=tambah" class="btn btn-default"><i class="fa fa-fw fa-plus" style="color:#000"></i>Tambah</a>
</div>
