<?php
    include"../koneksi/koneksi.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    if ($_POST['password']==$_POST['password-1'] )
    {
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      //$no_telp = $_POST['no_telp'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $td = date("Y-m-d");

        if (!empty($id) && !empty($nama) && !empty($alamat) && !empty($email) && !empty($password))
        {
          $sqlupdate = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat_pelanggan, email_pelanggan, password_pelanggan, tanggal_daftar) VALUES ('$id','$nama','$alamat','$email','$password','$td')";

          while ($mysqli->query($sqlupdate))
          {
            ?>
            <script>
            alert('Sign Up Success');
            window.location.href="../index.php";
            </script><?php
          }
        }
        else
        {
          ?>
          <script>
          alert('Data is not Valid');
          window.location.href="../index.php";
          </script><?php
        }
    }

    else
    {
      ?><script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
<?php  header('location:../index.php');
    }
?>
