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


  <!-- contact section -->
  <section id="contact" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="wow fadeInDown animated">Login</h2>

      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 conForm">
          <div id="message"></div>
          <form  action="login-section.php" method="post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-check-label" for="exampleRadios1"> Username</label>
                  </div>
                  <div class="col-md-8">
                    <input name="id_admin" id="username" type="text" class="form-control" placeholder="username">
                    <input type="hidden" name="akses" value="admin">
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-check-label" for="exampleRadios1"> password</label>
                  </div>
                  <div class="col-md-8">
                    <input name="password_admin" id="password" type="password" class="form-control" placeholder="password">
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                   
                  </div>
                  <div class="col-md-8">
                  <button type="submit" name="send" value="send" /> Login</button>
                  
                  </div>
                </div>
              </div>
            </div>
         
         
           

          


          
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