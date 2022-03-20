<?php
if (!empty($_GET['not'])) {
  $not = $_GET['not'];
}

 ?>

<div class="table-responsive" style="height:200px">
<table class="table table-bordered table-hover table-striped" border="1">
    <thead>
         <tr>
             <th>No.</th>
             <th>Book Title</th>
             <th>Price</th>
             <th>Qty</th>
             <th>Sub Total</th>
             <th>Order Detail</th>
         </tr>
     </thead>


     <tbody>
       <?php
       //if (isset($_SESSION['items'])) {$total = 0;
      //     foreach ($_SESSION['items'] as $key => $val){
             $q = "SELECT * FROM transaksi INNER JOIN detail_transaksi INNER JOIN buku ON `transaksi`.`no_transaksi` = `detail_transaksi`.`no_transaksi` AND `detail_transaksi`.`id_buku` = `buku`.`id_buku` WHERE `detail_transaksi`.`no_transaksi` = '$not'";
             $queryq = $mysqli->query($q);
             $detail = "SELECT status_pembayaran FROM transaksi WHERE no_transaksi = '$not'";
             $querydetail = $mysqli->query($detail);
             $rsdetail = mysqli_fetch_array ($querydetail);

             //echo "$key $val". $_SESSION['items'];
        ?>
        <form action="pages/aksi_confirm.php" method="post">
          <?php $no=0;
          while ($rsq = mysqli_fetch_array ($queryq)){
          $no++; ?>

         <tr>
             <td><?php echo "$no"; ?> </td>
             <input hidden="true" name="no_trans" value="<?php echo "$rsq[no_transaksi]"; ?>">
             <td>
                 <?php echo "$rsq[judul_buku]"; ?>
             </td>
             <td>
                 <?php echo "$rsq[harga_buku]"; ?>
             </td>
             <td>
                  <?php echo "$rsq[jumlah_beli]" ?>
             </td>
             <td>
                  <?php echo "$rsq[subtotal]" ?>
             </td>
             <td>
                  <?php echo "$rsq[status_pembayaran]" ?>
             </td>
         </tr><?php $total = $rsq['total_bayar'] ?>
       <?php } ?>
         <tr>
             <th colspan="4">Total</td>
             <th>
                 <?php echo "$total" ?>
             </th>
             <td>

               <?php

                 if ($rsdetail['status_pembayaran'] == "Waiting Payment")
                 {
                   ?><button type="submit" class="btn btn-danger fa fa-arrow-circle-right">Confirm Payment</button><?php
                 }
                 else
                 {
                   ?><a href="index.php?p=req-order" class="btn btn-danger fa fa-arrow-circle-left">Back</a><?php
                 }

               ?>


             </td>
             </form>
         </tr>
     </tbody>

 </table>
</div>
