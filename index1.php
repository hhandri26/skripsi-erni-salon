<!DOCTYPE html>
<html lang="en">
  <?php include 'koneksi/koneksi.php';
        session_start();
  ?>

<!--=================================HEADER==================================-->
<head>
  <?php include 'header.php'; ?>
</head>
<!--=================================HEADER==================================-->

<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Salon <span>Muslimah</span></a></h1>

        <?php include 'nav.php'; ?>

      <form action="" id="search-form" method="post">
        <fieldset>
          <div class="rowElem">

              <input type="text" name="input_cari" placeholder="Cari Berdasar Nama Servis" class="css-input" style="width:250px;" />

              <button type="submit" name="cari" value="Cari"/>Search</button>

          </div>
        </fieldset>
      </form>



    </div>
  </header>



  <div class="container">
    <aside>
      <h3>Categories</h3>
        <ul class="categories">
          <?php
            $kat = "SELECT * FROM kategori_servis";
            $querykat = $mysqli->query($kat);
            //$rskat = mysqli_fetch_array ($querykat);
            while ($rskat = $querykat->fetch_array())
            { ?>

              <li><span><a href="index1.php?p=kategori&id=<?php echo $rskat['id_kategori']; ?>" style="text-transform:uppercase"><?php echo $rskat['nama_kategori']; ?></a></span></li>

          <?php } ?>

        </ul>

        <?php

          if (!isset($_SESSION['hak']))
          {
            ?><h3>Log In Untuk Reservasi</h3>
            <form action="login-section.php" id="login-form" method="post">
              <fieldset>
                <div class="rowElem">
                  <!--h2>Login</h2-->
                  <input type="text" name="userid" placeholder="Enter Your ID/Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
                  <input type="password" name="password" placeholder="Enter Your Password Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
                  <select name="akses" class="form-control" placeholder="Akses sebagai?" autocomplete="off">
                    <option value="admin">Admin</option>
                    <option value="pelanggan">Pelanggan</option>
                    <option value="pimpinan">Pimpinan</option>
                  </select>
                  <div class="clear"><a href="index1.php?p=sign-up" class="fleft" style="text-decoration: underline;">Sign Up For Free</a><button type="submit" class="btn btn-xs btn-default fright">Log In</button></div>
                </div>
              </fieldset>
              <br><center><p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>
              
            </form><?php
          }
          else
          {
            echo "$_SESSION[hak]";
          }

        ?>

      <!--h2>Fresh <span>News</span></h2>
      <ul class="news">
        <li><strong>June 30, 2010</strong>
          <h4><a href="#">Sed ut perspiciatis unde</a></h4>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </li>
        <li><strong>June 14, 2010</strong>
          <h4><a href="#">Neque porro quisquam est</a></h4>
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit consequuntur magni. </li>
        <li><strong>May 29, 2010</strong>
          <h4><a href="#">Minima veniam, quis nostrum</a></h4>
          Uis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae. </li>
      </ul-->
    </aside>

    <?php

        if(!empty($_GET['p'])){
              $p=$_GET['p'];
       				include('pages/'.$p.'.php');
       			}

        else {
          if (empty($_SESSION['hak'])) {
            include('home.php');
          }
       		else	{
            include('home.php');
          }
       		}

     		?>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a>
    </p>
    <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
