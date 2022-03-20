<div class="apps-content-item">
<?php

$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];
$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];
$query = "SELECT max(id_pelanggan) as maxKode FROM pelanggan";
$hasil = $mysqli->query($query);
$data  = mysqli_fetch_array($hasil);
$kodeTrans = $data['maxKode'];
$noUrut = (int) substr($kodeTrans, 2, 6);
$noUrut++;
$char = "PL";
$id_pl = $char . sprintf("%06s", $noUrut);

if ($aksi == 'detail') {
  ?>
  <table id="tbl">
    <?php
    foreach ($sqledit_pelanggan as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">ID Pelanggan</th>
               <td width="5%">:</td>
               <td><?php echo $id_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Pelanggan</th>
               <td width="5%">:</td>
               <td><?php echo $nama_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">E-Mail Pelanggan</th>
               <td width="5%">:</td>
               <td><?php echo $email_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">Tempat, Tanggal Lahir</th>
               <td width="5%">:</td>
               <td><?php echo $tempat_lahir_pelanggan.", ".$tanggal_lahir_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">Agama</th>
               <td width="5%">:</td>
               <td><?php echo $agama_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">Alamat</th>
               <td width="5%">:</td>
               <td><?php echo $alamat_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">Jenis Kelamin</th>
               <td width="5%">:</td>
               <td><?php echo $jk_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">Tanggal Daftar</th>
               <td width="5%">:</td>
               <td><?php echo $tanggal_daftar; ?></td>
           </tr>
           <?php
         }
          ?>
   </table>
   <a href="index.php?p=d_pelanggan" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a>
  <?php
}
elseif ($aksi == 'edit') {
  ?>
    <form action="konten/proses/d_pelanggan_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="edit">
      <table id="tbl">
        <?php
        foreach ($sqledit_pelanggan as $key) {
          extract($key);
          ?>
               <tr>
                   <th width="19%">ID Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>"><?php echo $id_pelanggan; ?></td>
               </tr>

               <tr>
                   <th width="19%">Nama Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_pelanggan" value="<?php echo $nama_pelanggan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_pelanggan" value="<?php echo $email_pelanggan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Tempat, Tanggal Lahir</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="tempat_lahir_pelanggan" value="<?php echo $tempat_lahir_pelanggan; ?>"><input type="date" name="tanggal_lahir_pelanggan" value="<?php echo $tanggal_lahir_pelanggan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Agama</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="agama_pelanggan" value="<?php echo $agama_pelanggan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Alamat</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="alamat_pelanggan" value="<?php echo $alamat_pelanggan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Jenis Kelamin</th>
                   <td width="5%">:</td>
                   <td>
                     <select name="jk_pelanggan">
                       <option value="<?php echo $alamat_pelanggan; ?>">L/P</option>
                       <option value="L">Laki-laki</option>
                       <option value="P">Perempuan</option>
                     </select>
                   </td>
               </tr>

               <tr>
                   <th width="19%">Tanggal Daftar</th>
                   <td width="5%">:</td>
                   <td><input type="date" name="tanggal_daftar" value="<?php echo $tanggal_daftar; ?>"></td>
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
    <form action="konten/proses/d_pelanggan_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="tambah">
      <table id="tbl">

               <tr>
                   <th width="19%">ID Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="id_pelanggan" value="<?php echo $id_pl ?>" readonly></td>
               </tr>

               <tr>
                   <th width="19%">Nama Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_pelanggan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_pelanggan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Tempat, Tanggal Lahir</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="tempat_lahir_pelanggan" value="" style="width:20% !important;"><input type="date" name="tanggal_lahir_pelanggan" value="<?php echo $tanggal_lahir_pelanggan; ?>" style="width:20% !important;"></td>
               </tr>

               <tr>
                   <th width="19%">Agama</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="agama_pelanggan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Alamat</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="alamat_pelanggan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Jenis Kelamin</th>
                   <td width="5%">:</td>
                   <td>
                     <select name="jk_pelanggan">
                       <option value="">L/P</option>
                       <option value="L">Laki-laki</option>
                       <option value="P">Perempuan</option>
                     </select>
                   </td>
               </tr>

               <tr>
                   <th width="19%">Tanggal Daftar</th>
                   <td width="5%">:</td>
                   <td><input type="date" name="tanggal_daftar" value=""></td>
               </tr>


       </table>
       <div class="label">
         <button class="btn-login" type="submit">SIMPAN</button>
       </div>
    </form>
  <?php
}
elseif ($aksi == 'hapus') {
  $sqlhapus = "DELETE FROM pelanggan WHERE id_pelanggan='$id'";
  if ($mysqli->query($sqlhapus)) {
    ?>
      <script>
      alert('Data Berhasil Dihapus!');
      window.location.href="index.php?p=d_pelanggan";
      </script>
    <?php
  }
  else {
    ?>
      <script>
      alert('Data TIDAK Berhasil Dihapus!');
      window.location.href="index.php?p=d_pelanggan";
      </script>
    <?php
  }
}



 ?>
</div>
