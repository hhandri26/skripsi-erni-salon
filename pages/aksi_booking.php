<?php
    include "../koneksi/koneksi.php";
   
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

      $id               = $_POST['id'];
      $nama             = $_POST['nama'];
      $paket            = $_POST['paket'];
      $jenis_kelamin    = $_POST['jenis_kelamin'];
      $umur             = $_POST['umur'];
      $no_hp            = $_POST['no_hp'];
      $jadwal_booking   = $_POST['jadwal_booking'];

        if (!empty($nama) && !empty($paket) && !empty($no_hp) && !empty($jadwal_booking) )
        {
          $sqlupdate = "INSERT INTO pelanggan (id_pelanggan ,nama_pelanggan, paket, jk_pelanggan, umur, no_hp, jadwal_booking) VALUES ('$id','$nama','$paket','$jenis_kelamin','$umur','$no_hp','$jadwal_booking')";

          while ($mysqli->query($sqlupdate))
          {
            ?>
            <script>
            alert('Booking Suksess');
            window.location.href="../index.php";
            </script><?php
          }
        }
        else
        {
          ?>
          <script>
          alert('Data is not Valid');
         // window.location.href="../index.php";
          </script><?php
        }
    

   
?>
