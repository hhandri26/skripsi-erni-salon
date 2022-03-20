<?php include 'koneksi/koneksi.php';
        session_start();
        error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = "SELECT max(id_pelanggan) as maxKode FROM pelanggan";
$hasil = $mysqli->query($query);
$row  = mysqli_fetch_array($hasil);
$kode = $row['maxKode'];
$noUrut = (int) substr($kode, 2, 6);
$noUrut++;
$char = "PL";
$newID = $char . sprintf("%06s", $noUrut);

  ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>beauty and spa </title>
  <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
  <link rel="stylesheet" href="frontend/css/flexslider.css">
  <link rel="stylesheet" href="frontend/css/jquery.fancybox.css">
  <link rel="stylesheet" href="frontend/css/main.css">
  <link rel="stylesheet" href="frontend/css/responsive.css">
  <link rel="stylesheet" href="frontend/css/font-icon.css">
  <link rel="stylesheet" href="frontend/css/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <!-- header section -->
  <section class="banner" role="banner">
    <header id="header">
      <div class="header-content clearfix"> <a class="logo" href="index.html"><img style="width: 120px;
    margin-top: -40px;" src="images/logo.png" alt=""></a>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav">
            <li><a href="#services">Service</a></li>
            <li><a href="#package">Paket</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
    </header>
    <!-- banner text -->
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
          <h1>Ernie Tantra Salon</h1>

          <a href="#package" class="btn btn-large">Packages</a>
        </div>
        <!-- banner text -->
      </div>
    </div>
  </section>
  <!-- header section -->
  <!-- intro section -->
  <section id="intro" class="section intro">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h3>Aromatic Beauty Saloon and Spa!</h3>

      </div>
    </div>
  </section>
  <!-- intro section -->
  <!-- services section -->
  <section id="services" class="services service-section">
    <div class="container">
      <div class="section-header">
        <h2 class="wow fadeInDown animated">Paket Service</h2>

      </div>
      <div class="row">
        <?php
            $kat = "SELECT * FROM kategori_servis";
            $querykat = $mysqli->query($kat);
            //$rskat = mysqli_fetch_array ($querykat);
            while ($rskat = $querykat->fetch_array())
            { ?>


        <div class="col-md-4 col-sm-6 services text-center">
          <a href="index.php?p=kategori&id=<?php echo $rskat['id_kategori']; ?>" style="text-transform:uppercase">
            <span class="<?php echo $rskat['icon']; ?>"></span>
            <div class="services-content">
              <h5><?php echo $rskat['nama_kategori']; ?></h5>

            </div>
          </a>
        </div>

        <?php } ?>


      </div>
    </div>
  </section>
  <!-- services section -->
  <!-- package section -->
  <section id="package" class="packageList">
    <div class="container">
      <div class="section-header">
        <h2 class="wow fadeInDown animated">Paket</h2>

      </div>
      <div class="row">
        <?php
        if(!empty($_GET['id'])){
              $kat=$_GET['id'];
              $sqlkat= "SELECT * FROM kategori_servis WHERE id_kategori = '$kat'";
              $querykat= mysqli_query($mysqli,$sqlkat);
              //while (
              $datakat = $querykat->fetch_array();
            }
        ?>
        <?php
            $sqlbook= "SELECT * FROM tipe_servis WHERE id_kategori = '$kat'";
            $querybook= mysqli_query($mysqli,$sqlbook);
            while ($databook = $querybook->fetch_array()) {
          ?>
        <div class="col-md-6">

          <div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
            <h5><?php echo $databook['nama_servis']; ?></h5>
            <img style="width:50%;" src="img/servis/<?php echo $databook['gambar_servis']; ?>">
            <strong
              class="price"><small>Rp</small><?php echo number_format($databook['harga_servis'], 0, ',', '.'); ?></strong>
          </div><!-- end package -->

        </div><!-- end col-md-6 -->
        <?php } ?>

      </div><!-- end row -->
    </div>
  </section>
  <!-- package section -->


  <!-- contact section -->
  <section id="contact" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="wow fadeInDown animated">Contact Us</h2>

      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 conForm">
          <div id="message"></div>
          <form  action="pages/aksi_booking.php" method="post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-check-label" for="exampleRadios1"> Nama</label>
                  </div>
                  <div class="col-md-8">
                    <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama">
                    <input name="id" class="form-control col-lg-6" value="<?php echo $newID; ?>" type="hidden">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-check-label" for="exampleRadios1"> Paket</label>
                  </div>
                  <div class="col-md-8">
                    <select name="paket" id="paket" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-control">
                      <?php
                    $sqlbook2= "SELECT * FROM tipe_servis";
                    $querybook2= mysqli_query($mysqli,$sqlbook2);
                    while ($databook2 = $querybook2->fetch_array()) {
                  ?>
                      <option value="<?php echo $databook2['nama_servis']; ?>"><?php echo $databook2['nama_servis']; ?>
                      </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">

                    <label class="form-check-label" for="exampleRadios1">
                      Jenis Kelamin
                    </label>

                  </div>
                  <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1"
                      value="L">
                    <label class="form-check-label" for="exampleRadios1">
                      Laki - laki
                    </label>

                  </div>
                  <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1"
                      value="P">
                    <label class="form-check-label" for="exampleRadios1">
                      Perempuan
                    </label>

                  </div>

                </div>

              </div>

            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-check-label" for="exampleRadios1"> Umur</label>
                  </div>
                  <div class="col-md-8">
                    <input type="number" name="umur" class="form-control">

                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-check-label" for="exampleRadios1"> No Hp</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" name="no_hp" class="form-control">

                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-check-label" for="exampleRadios1"> Jadwal Booking</label>
                  </div>
                  <div class="col-md-8">
                    <input type="date" name="jadwal_booking" class="form-control">

                  </div>
                </div>
              </div>
            </div>

            <button type="submit" name="send" value="send" /> Booking</button>


          
            <div id="simple-msg"></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- contact section -->
  <!-- Footer section -->

  <!-- Footer section -->
  <!-- JS FILES -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="frontend/js/bootstrap.min.js"></script>
  <script src="frontend/js/jquery.flexslider-min.js"></script>
  <script src="frontend/js/jquery.fancybox.pack.js"></script>
  <script src="frontend/js/retina.min.js"></script>
  <script src="frontend/js/modernizr.js"></script>
  <script src="frontend/js/main.js"></script>
  <script type="text/javascript" src="frontend/js/jquery.contact.js"></script>
</body>

</html>