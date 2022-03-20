<form action="konten/proses/a_ubah_profil_aksi.php" method="post">
  <input type="hidden" name="tipe_edit" value="edit">
  <table id="tbl">
    <?php
    foreach ($sql_pimpinan as $key) {
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
                   <option value="<?php echo $jk_pimpinan; ?>">L/P</option>
                   <option value="L">Laki-laki</option>
                   <option value="P">Perempuan</option>
                 </select>
               </td>
           </tr>

           <tr>
               <th width="19%">Password</th>
               <td width="5%">:</td>
               <td><input type="password" name="password_pimpinan" value=""></td>
           </tr>
           <tr>
               <th width="19%">Konfirmasi Password</th>
               <td width="5%">:</td>
               <td><input type="password" name="konfirmasi_password_pimpinan" value=""></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <div class="label">
     <button class="btn-login" type="submit">SIMPAN</button>
   </div>
</form>
