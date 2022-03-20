<?php
include '../../../koneksi/koneksi.php';
$tipe_edit = $_POST['tipe_edit'];
$kode_servis = $_POST['kode_servis'];
$nama_servis = $_POST['nama_servis'];
$keterangan_servis = $_POST['keterangan_servis'];
$harga_servis = $_POST['harga_servis'];
$id_kategori = $_POST['id_kategori'];



if (
  !empty($kode_servis) AND
  (!empty($nama_servis)) AND
  (!empty($keterangan_servis)) AND
  (!empty($harga_servis)) AND
  (!empty($id_kategori))
) {
  $ekstensi_diperbolehkan	= array('png','jpg');
  $nama = $_FILES['file_gambar']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file_gambar']['size'];
  $file_tmp = $_FILES['file_gambar']['tmp_name'];
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){
      move_uploaded_file($file_tmp, '../../../img/servis/'.$nama);
      if ($tipe_edit == 'edit') {

        $queryupdate_servis = "UPDATE tipe_servis SET
          kode_servis = '$kode_servis',
          nama_servis = '$nama_servis',
          gambar_servis = '$nama',
          keterangan_servis = '$keterangan_servis',
          harga_servis = '$harga_servis',
          id_kategori = '$id_kategori' WHERE kode_servis = '$kode_servis'";
        $sqlupdate_servis = $mysqli->query($queryupdate_servis);
      }
      elseif ($tipe_edit == 'tambah') {
        $queryupdate_servis = "INSERT INTO tipe_servis
        (
          kode_servis,
          nama_servis,
          gambar_servis,
          keterangan_servis,
          harga_servis,
          id_kategori
        )
        VALUES
        (
          '$kode_servis',
          '$nama_servis',
          '$nama',
          '$keterangan_servis',
          '$harga_servis',
          '$id_kategori'
        )
        ";
        $sqlupdate_servis = mysqli_query($mysqli,$queryupdate_servis);
      }


      if($sqlupdate_servis){
        ?>
          <script>
            alert('Data Berhasil Disimpan!');
            window.location.href="../../index.php?p=d_administrasi&k=a_servis";
          </script>
        <?php
      }else{
        echo 'GAGAL MENGUPLOAD GAMBAR';
      }
    }else{
      echo 'UKURAN FILE TERLALU BESAR';
    }
  }else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
  }




}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=p=d_administrasi&k=a_servis";
  </script>
  <?php
}

?>
