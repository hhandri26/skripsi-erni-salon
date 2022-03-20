    <table id="tbl" width="100%">
      <tr>
        <th>No.</th>
        <th>ID Karyawan</th>
        <th>Nama Karyawan</th>
        <th>Gaji Pokok</th>
        <th>Gaji Bersih</th>
        <th>Opsi</th>
      </tr>
      <?php
      $no = 0;
      foreach ($sql_penggajian as $key) {
        extract($key);
      $no++;
      ?>
      <tr text-align="center">
        <td><?php echo $no; ?></td>
        <td><?php echo $id_karyawan; ?></td>
        <td><?php echo $nama_karyawan; ?></td>
        <td><?php echo $gaji_pokok; ?></td>
        <td><?php echo $gaji_bersih; ?></td>
        <td>
         <a href="index.php?p=d_administrasi&k=p_penggajian&aksi=detail&id=<?php echo $id; ?>" class="fa fa-fw fa-arrow-circle-right" title="Rincian Profile"></a>
         <a href="index.php?p=d_administrasi&k=p_penggajian&aksi=edit&id=<?php echo $id; ?>" class="fa fa-fw fa-edit" title="edit" title="Ubah Data pimpinan"></a>
         <a href="index.php?p=d_administrasi&k=p_penggajian&aksi=hapus&id=<?php echo $id; ?>" title="hapus"
           onclick="javascript: return confirm('Anda yakin akan menghapus data gaji <?php echo $id_karyawan; ?>?')"
           class="fa fa-fw fa-trash" style="color:red"></a>
        </td>
      </tr>
    <?php } ?>
    </table>
