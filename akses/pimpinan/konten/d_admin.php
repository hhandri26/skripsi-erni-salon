<div class="apps-content-item">
<table id="tbl" width="100%">
  <tr>
    <th>No.</th>
    <th>ID</th>
    <th>Nama</th>
    <th>E-Mail</th>
    <th>JK</th>
    <th>Opsi</th>

  </tr>
  <?php
  $no = 0;
  foreach ($sql_admin as $key) {
    extract($key);
  $no++;
  ?>
  <tr text-align="center">
    <td><?php echo $no; ?></td>
    <td><?php echo $id_admin; ?></td>
    <td><?php echo $nama_admin; ?></td>
    <td><?php echo $email_admin; ?></td>
    <td><?php echo $jk_admin; ?></td>
    <td>
     <a href="index.php?p=d_admin_tools&id_adm=<?php echo $id_admin; ?>&aksi=detail" class="btn btn-default" title="Rincian Profile">Detail</a>
     <a href="index.php?p=d_admin_tools&id_adm=<?php echo $id_admin; ?>&aksi=edit" class="btn btn-default" title="Ubah Data admin">Ubah</a>
     <a href="index.php?p=d_admin_tools&id_adm=<?php echo $id_admin; ?>&aksi=hapus" title="hapus"
       onclick="javascript: return confirm('Anda yakin akan menghapus data admin <?php echo $id_admin; ?>?')"
       class="btn btn-default" style="color:red">Hapus</a>
    </td>
  </tr>
<?php } ?>
</table>
<a href="index.php?p=d_admin_tools&aksi=tambah" class="btn btn-default"><i class="fa fa-fw fa-plus" style="color:#000"></i>Tambah</a>


</div>
