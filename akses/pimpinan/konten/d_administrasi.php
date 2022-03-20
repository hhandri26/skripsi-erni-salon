<div class="apps-content-item">
  <ul class="adm">
    <li><a href="?p=d_administrasi&k=a_servis"><i class="fa fa-fw fa-home"></i> Kelola Servis</a></li>
    <li><a href="?p=d_administrasi&k=a_transaksi"><i class="fa fa-fw fa-money-bill-alt"></i> Data Transaksi</a></li>
    <li><a href="?p=d_administrasi&k=a_ubah_profil"><i class="fa fa-fw fa-user"></i> Ubah Profil</a></li>
    <li><a href="?p=d_administrasi&k=cetaktrans"><i class="fa fa-fw fa-print"></i> Lap. Transaksi</a></li>
    <li><a href="konten/administrasi/cetak_tr.php?data=pelanggan"><i class="fa fa-fw fa-print"></i> Lap. Pelanggan</a></li>
    <li><a href="konten/administrasi/cetak_tr.php?data=karyawan"><i class="fa fa-fw fa-print"></i> Lap. Karyawan</a></li>
  </ul>
  <div class="adm-content">
    <?php
      if (!empty($_GET['k'])) {
        $k = $_GET['k'];
        if (file_exists("konten/administrasi/$k.php")) {
          include 'konten/administrasi/'.$k.'.php';
        }
        else {
          include 'not_found.php';
        }
      }
      elseif (empty($_GET['k'])) {
        include 'konten/administrasi/a_servis.php';
      }
     ?>
  </div>
</div>
