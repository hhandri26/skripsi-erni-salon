<div class="apps-content-item">
<?php

$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];


if ($aksi == 'detail') {
  ?>
  <table id="tbl">
    <?php
    foreach ($sqledit_admin as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">ID Admin</th>
               <td width="5%">:</td>
               <td><?php echo $id_admin; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Admin</th>
               <td width="5%">:</td>
               <td><?php echo $nama_admin; ?></td>
           </tr>

           <tr>
               <th width="19%">E-Mail Admin</th>
               <td width="5%">:</td>
               <td><?php echo $email_admin; ?></td>
           </tr>

           <tr>
               <th width="19%">Tempat, Tanggal Lahir</th>
               <td width="5%">:</td>
               <td><?php echo $tempat_lahir_admin.", ".$tanggal_lahir_admin; ?></td>
           </tr>

           <tr>
               <th width="19%">Agama</th>
               <td width="5%">:</td>
               <td><?php echo $agama_admin; ?></td>
           </tr>

           <tr>
               <th width="19%">Alamat</th>
               <td width="5%">:</td>
               <td><?php echo $alamat_admin; ?></td>
           </tr>

           <tr>
               <th width="19%">Jenis Kelamin</th>
               <td width="5%">:</td>
               <td><?php echo $jk_admin; ?></td>
           </tr>


           <tr>
               <th width="19%">Status Kerja</th>
               <td width="5%">:</td>
               <td><?php echo $status_kerja; ?></td>
           </tr>
           <?php
         }
          ?>
   </table>
   <a href="index.php?p=d_admin" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a>
  <?php
}
elseif ($aksi == 'edit') {
  ?>
    <form action="konten/proses/d_admin_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="edit">
      <table id="tbl">
        <?php
        foreach ($sqledit_admin as $key) {
          extract($key);
          ?>
               <tr>
                   <th width="19%">ID Admin</th>
                   <td width="5%">:</td>
                   <td><input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>"><?php echo $id_admin; ?></td>
               </tr>

               <tr>
                   <th width="19%">Nama Admin</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_admin" value="<?php echo $nama_admin; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Admin</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_admin" value="<?php echo $email_admin; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Tempat, Tanggal Lahir</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="tempat_lahir_admin" value="<?php echo $tempat_lahir_admin; ?>"><input type="date" name="tanggal_lahir_admin" value="<?php echo $tanggal_lahir_admin; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Agama</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="agama_admin" value="<?php echo $agama_admin; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Alamat</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="alamat_admin" value="<?php echo $alamat_admin; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Jenis Kelamin</th>
                   <td width="5%">:</td>
                   <td>
                     <select name="jk_admin">
                       <option value="<?php echo $alamat_admin; ?>">L/P</option>
                       <option value="L">Laki-laki</option>
                       <option value="P">Perempuan</option>
                     </select>
                   </td>
               </tr>

               <tr>
                   <th width="19%">Status Kerja</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="status_kerja" value="<?php echo $status_kerja; ?>"></td>
               </tr>

               <?php
             }
              ?>
       </table>
       <div class="label">
         <button class="btn-login" type="submit">SIMPAN</button>
       </div>
    </form>
  <?php
}
elseif ($aksi == 'tambah') {
  ?>
    <form action="konten/proses/d_admin_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="tambah">
      <table id="tbl">

               <tr>
                   <th width="19%">ID Admin</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="id_admin" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Nama Admin</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_admin" value=""></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Admin</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_admin" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Tempat, Tanggal Lahir</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="tempat_lahir_admin" value="" style="width:20% !important;"><input type="date" name="tanggal_lahir_admin" value="<?php echo $tanggal_lahir_admin; ?>" style="width:20% !important;"></td>
               </tr>

               <tr>
                   <th width="19%">Agama</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="agama_admin" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Alamat</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="alamat_admin" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Status Kerja</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="status_kerja" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Jenis Kelamin</th>
                   <td width="5%">:</td>
                   <td>
                     <select name="jk_admin">
                       <option value="">L/P</option>
                       <option value="L">Laki-laki</option>
                       <option value="P">Perempuan</option>
                     </select>
                   </td>
               </tr>

       </table>
       <div class="label">
         <button class="btn-login" type="submit">SIMPAN</button>
       </div>
    </form>
  <?php
}
elseif ($aksi == 'hapus') {
  $sqlhapus = "DELETE FROM admin WHERE id_admin='$id'";
  if ($mysqli->query($sqlhapus)) {
    ?>
      <script>
      alert('Data Berhasil Dihapus!');
      window.location.href="index.php?p=d_admin";
      </script>
    <?php
  }
  else {
    ?>
      <script>
      alert('Data TIDAK Berhasil Dihapus!');
      window.location.href="index.php?p=d_admin";
      </script>
    <?php
  }
}



 ?>
</div>
