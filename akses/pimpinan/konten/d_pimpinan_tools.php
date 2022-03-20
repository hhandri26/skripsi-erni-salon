<div class="apps-content-item">
<?php

$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];


if ($aksi == 'detail') {
  ?>
  <table id="tbl">
    <?php
    foreach ($sqledit_pimpinan as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">ID Pimpinan</th>
               <td width="5%">:</td>
               <td><?php echo $id_pimpinan; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Pimpinan</th>
               <td width="5%">:</td>
               <td><?php echo $nama_pimpinan; ?></td>
           </tr>

           <tr>
               <th width="19%">E-Mail Pimpinan</th>
               <td width="5%">:</td>
               <td><?php echo $email_pimpinan; ?></td>
           </tr>

           <tr>
               <th width="19%">Tempat, Tanggal Lahir</th>
               <td width="5%">:</td>
               <td><?php echo $tempat_lahir_pimpinan.", ".$tanggal_lahir_pimpinan; ?></td>
           </tr>

           <tr>
               <th width="19%">Agama</th>
               <td width="5%">:</td>
               <td><?php echo $agama_pimpinan; ?></td>
           </tr>

           <tr>
               <th width="19%">Alamat</th>
               <td width="5%">:</td>
               <td><?php echo $alamat_pimpinan; ?></td>
           </tr>

           <tr>
               <th width="19%">Jenis Kelamin</th>
               <td width="5%">:</td>
               <td><?php echo $jk_pimpinan; ?></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <a href="index.php?p=d_pimpinan" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a>
  <?php
}
elseif ($aksi == 'edit') {
  ?>
    <form action="konten/proses/d_pimpinan_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="edit">
      <table id="tbl">
        <?php
        foreach ($sqledit_pimpinan as $key) {
          extract($key);
          ?>
               <tr>
                   <th width="19%">ID Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="hidden" name="id_pimpinan" value="<?php echo $id_pimpinan; ?>"><?php echo $id_pimpinan; ?></td>
               </tr>

               <tr>
                   <th width="19%">Nama Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_pimpinan" value="<?php echo $nama_pimpinan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_pimpinan" value="<?php echo $email_pimpinan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Tempat, Tanggal Lahir</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="tempat_lahir_pimpinan" value="<?php echo $tempat_lahir_pimpinan; ?>"><input type="date" name="tanggal_lahir_pimpinan" value="<?php echo $tanggal_lahir_pimpinan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Agama</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="agama_pimpinan" value="<?php echo $agama_pimpinan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Alamat</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="alamat_pimpinan" value="<?php echo $alamat_pimpinan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Jenis Kelamin</th>
                   <td width="5%">:</td>
                   <td>
                     <select name="jk_pimpinan">
                       <option value="<?php echo $alamat_pimpinan; ?>">L/P</option>
                       <option value="L">Laki-laki</option>
                       <option value="P">Perempuan</option>
                     </select>
                   </td>
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
    <form action="konten/proses/d_pimpinan_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="tambah">
      <table id="tbl">

               <tr>
                   <th width="19%">ID Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="id_pimpinan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Nama Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_pimpinan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_pimpinan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Tempat, Tanggal Lahir</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="tempat_lahir_pimpinan" value="" style="width:20% !important;"><input type="date" name="tanggal_lahir_pimpinan" value="<?php echo $tanggal_lahir_pimpinan; ?>" style="width:20% !important;"></td>
               </tr>

               <tr>
                   <th width="19%">Agama</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="agama_pimpinan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Alamat</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="alamat_pimpinan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Jenis Kelamin</th>
                   <td width="5%">:</td>
                   <td>
                     <select name="jk_pimpinan">
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
  $sqlhapus = "DELETE FROM pimpinan WHERE id_pimpinan='$id'";
  if ($mysqli->query($sqlhapus)) {
    ?>
      <script>
      alert('Data Berhasil Dihapus!');
      window.location.href="index.php?p=d_pimpinan";
      </script>
    <?php
  }
  else {
    ?>
      <script>
      alert('Data TIDAK Berhasil Dihapus!');
      window.location.href="index.php?p=d_pimpinan";
      </script>
    <?php
  }
}



 ?>
</div>
