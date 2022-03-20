<div class="apps-content-item">
<?php

$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];
$query = "SELECT max(kode_servis) as maxKode FROM tipe_servis";
$hasil = $mysqli->query($query);
$data  = mysqli_fetch_array($hasil);
$kodeTrans = $data['maxKode'];
$noUrut = (int) substr($kodeTrans, 3, 4);
$noUrut++;
$char = "SVR";
$id_sv = $char . sprintf("%04s", $noUrut);

if ($aksi == 'detail') {
  ?>
  <table id="tbl">
    <?php
    foreach ($sqledit_servis as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">Kode Servis</th>
               <td width="5%">:</td>
               <td><?php echo $kode_servis; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Servis</th>
               <td width="5%">:</td>
               <td><?php echo $nama_servis; ?></td>
           </tr>

           <tr>
               <th width="19%">Keterangan Servis</th>
               <td width="5%">:</td>
               <td><?php echo $keterangan_servis; ?></td>
           </tr>

           <tr>
               <th width="19%">Gambar</th>
               <td width="5%">:</td>
               <td><img src="../img/servis/<?php echo $gambar_servis; ?>" width=50%></td>
           </tr>

           <tr>
               <th width="19%">Harga</th>
               <td width="5%">:</td>
               <td><?php echo $harga_servis; ?></td>
           </tr>

           <tr>
               <th width="19%">Ketegori</th>
               <td width="5%">:</td>
               <td><?php echo $id_kategori; ?></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <a href="index.php?p=d_administrasi&k=a_servis" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a>
  <?php
}
elseif ($aksi == 'edit') {
  ?>
    <form action="konten/proses/a_servis_edit_aksi.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="tipe_edit" value="edit">
      <a href="index.php?p=d_administrasi&k=a_servis" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a><hr>
      <table id="tbl">
        <?php
        foreach ($sqledit_servis as $key) {
          extract($key);
          ?>
               <tr>
                   <th width="19%">Kode Servis</th>
                   <td width="5%">:</td>
                   <td><input type="hidden" name="kode_servis" value="<?php echo $kode_servis; ?>"><?php echo $kode_servis; ?></td>
               </tr>

               <tr>
                   <th width="19%">Nama Servis</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_servis" value="<?php echo $nama_servis; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Keterangan Servis</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="keterangan_servis" value="<?php echo $keterangan_servis; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Gambar</th>
                   <td width="5%">:</td>
                   <td><input type="file" name="file_gambar"></td>
               </tr>

               <tr>
                   <th width="19%">Harga</th>
                   <td width="5%">:</td>
                   <td>Rp <input type="text" name="harga_servis" value="<?php echo $harga_servis; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Ketegori</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="id_kategori" value="<?php echo $id_kategori; ?>"></td>
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
    <form action="konten/proses/a_servis_edit_aksi.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="tipe_edit" value="tambah">
      <table id="tbl">

        <tr>
            <th width="19%">Kode Servis</th>
            <td width="5%">:</td>
            <td><input type="text" name="kode_servis" value="<?php echo $id_sv; ?>" readonly></td>
        </tr>

        <tr>
            <th width="19%">Nama Servis</th>
            <td width="5%">:</td>
            <td><input type="text" name="nama_servis" value=""></td>
        </tr>

        <tr>
            <th width="19%">Keterangan Servis</th>
            <td width="5%">:</td>
            <td><input type="text" name="keterangan_servis" value=""></td>
        </tr>

        <tr>
            <th width="19%">Gambar</th>
            <td width="5%">:</td>
            <td><input type="file" name="file_gambar"></td>
        </tr>

        <tr>
            <th width="19%">Harga</th>
            <td width="5%">:</td>
            <td><input type="text" name="harga_servis" value=""></td>
        </tr>

        <tr>
            <th width="19%">Ketegori</th>
            <td width="5%">:</td>
            <td><input type="text" name="id_kategori" value=""></td>
        </tr>


       </table>
       <div class="label">
         <button class="btn-login" type="submit">SIMPAN</button>
       </div>
    </form>
  <?php
}
elseif ($aksi == 'hapus') {
  $sqlhapus = "DELETE FROM tipe_servis WHERE kode_servis='$ids'";
  if ($mysqli->query($sqlhapus)) {
    ?>
      <script>
      alert('Data Berhasil Dihapus!');
      window.location.href="index.php?p=d_administrasi&k=a_servis";
      </script>
    <?php
  }
  else {
    ?>
      <script>
      alert('Data TIDAK Berhasil Dihapus!');
      window.location.href="index.php?p=d_administrasi&k=a_servis";
      </script>
    <?php
  }
}



 ?>
</div>
