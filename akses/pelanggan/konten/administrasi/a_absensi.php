<table id="tbl" width="100%">
  <tr>
    <th colspan="4">Pimpinan</th>
  </tr>
  <tr>
    <th>No.</th>
    <th>ID</th>
    <th>Nama</th>

    <th>Kehadiran</th>

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
    <td>

    </td>
  </tr>
<?php } ?>
  <tr>
    <th colspan="4">Karyawan</th>
  </tr>
<?php
$no1 = 0;
foreach ($sql_karyawan as $key) {
  extract($key);
$no1++;
?>
<tr text-align="center">
  <td><?php echo $no1; ?></td>
  <td><?php echo $id_karyawan; ?></td>
  <td><?php echo $nama_karyawan; ?></td>
  <td>

  </td>
</tr>
<?php } ?>
</table>
