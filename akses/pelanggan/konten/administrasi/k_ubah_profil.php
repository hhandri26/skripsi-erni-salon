<form action="konten/proses/a_ubah_profil_aksi.php" method="post">
  <input type="hidden" name="tipe_edit" value="edit">
  <table id="tbl">
    <?php
    foreach ($sqledit_karyawan as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">ID Karyawan</th>
               <td width="5%">:</td>
               <td><input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>"><?php echo $id_karyawan; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Karyawan</th>
               <td width="5%">:</td>
               <td><input type="text" name="nama_karyawan" value="<?php echo $nama_karyawan; ?>"></td>
           </tr>

           <tr>
               <th width="19%">E-Mail Karyawan</th>
               <td width="5%">:</td>
               <td><input type="text" name="email_karyawan" value="<?php echo $email_karyawan; ?>"></td>
           </tr>

           <tr>
               <th width="19%">Tempat, Tanggal Lahir</th>
               <td width="5%">:</td>
               <td><input type="text" name="tempat_lahir_karyawan" value="<?php echo $tempat_lahir_karyawan; ?>"><input type="date" name="tanggal_lahir_karyawan" value="<?php echo $tanggal_lahir_karyawan; ?>"></td>
           </tr>

           <tr>
               <th width="19%">Agama</th>
               <td width="5%">:</td>
               <td><input type="text" name="agama_karyawan" value="<?php echo $agama_karyawan; ?>"></td>
           </tr>

           <tr>
               <th width="19%">Alamat</th>
               <td width="5%">:</td>
               <td><input type="text" name="alamat_karyawan" value="<?php echo $alamat_karyawan; ?>"></td>
           </tr>

           <tr>
               <th width="19%">Jenis Kelamin</th>
               <td width="5%">:</td>
               <td>
                 <select name="jk_karyawan">
                   <option value="<?php echo $alamat_karyawan; ?>">L/P</option>
                   <option value="L">Laki-laki</option>
                   <option value="P">Perempuan</option>
                 </select>
               </td>
           </tr>

           <tr>
               <th width="19%">Password</th>
               <td width="5%">:</td>
               <td><input type="text" name="password_karyawan" value=""></td>
           </tr>
           <tr>
               <th width="19%">Konfirmasi Password</th>
               <td width="5%">:</td>
               <td><input type="text" name="konfirmasi_password_karyawan" value=""></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <div class="label">
     <button class="btn-login" type="submit">SIMPAN</button>
   </div>
</form>
