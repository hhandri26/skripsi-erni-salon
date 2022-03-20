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
  foreach ($sql_pimpinan as $key) {
    extract($key);
  $no++;
  ?>
  <tr text-align="center">
    <td><?php echo $no; ?></td>
    <td><?php echo $id_pimpinan; ?></td>
    <td><?php echo $nama_pimpinan; ?></td>
    <td><?php echo $email_pimpinan; ?></td>
    <td><?php echo $jk_pimpinan; ?></td>
    <td>
     <a href="index.php?p=d_pimpinan_tools&id=<?php echo $id_pimpinan; ?>&aksi=detail" class="fa fa-fw fa-arrow-circle-right" title="Rincian Profile"></a>
     <a href="index.php?p=d_pimpinan_tools&id=<?php echo $id_pimpinan; ?>&aksi=edit" class="fa fa-fw fa-edit" title="edit" title="Ubah Data pimpinan"></a>
     <a href="index.php?p=d_pimpinan_tools&id=<?php echo $id_pimpinan; ?>&aksi=hapus" title="hapus"
       onclick="javascript: return confirm('Anda yakin akan menghapus data pimpinan <?php echo $id_pimpinan; ?>?')"
       class="fa fa-fw fa-trash" style="color:red"></a>
    </td>
  </tr>
<?php } ?>
</table>
<!--a href="index.php?p=d_pimpinan_tools&aksi=tambah" class="btn btn-default"><i class="fa fa-fw fa-plus" style="color:#000"></i>Tambah</a-->


</div>
