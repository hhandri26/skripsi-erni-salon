<?php
$id = $_SESSION['id'];

 ?>

<div class="table-responsive" style="height:200px">
<table class="table table-bordered table-hover table-striped" border="1">
    <thead>
         <tr>
             <th>Trans Code</th>
             <th>Order Date</th>
             <th>Price Total</th>
             <th>Status Pembayaran</th>
             <th></th>
         </tr>
     </thead>


     <tbody>
       <?php
       //if (isset($_SESSION['items'])) {$total = 0;
      //     foreach ($_SESSION['items'] as $key => $val){
             $q = "SELECT DISTINCT `transaksi`.`no_transaksi`,`transaksi`.`tgl_beli`,`transaksi`.`total_bayar`,`transaksi`.`status_pembayaran` FROM transaksi INNER JOIN detail_transaksi ON `transaksi`.`no_transaksi` = `detail_transaksi`.`no_transaksi` WHERE `transaksi`.`id_pelanggan` = '$id' ";
             $queryq = $mysqli->query($q);


             //echo "$key $val". $_SESSION['items'];
        ?>

        <?php $no=0;

        while ($rsq = mysqli_fetch_array ($queryq)){
          if ($rsq['status_pembayaran'] == "Waiting Payment") {
            $date1 = $rsq['tgl_beli'];
            $start_date = new datetime($date1);
            $end_date = new DateTime(date('Y-m-d'));
            $interval = $start_date->diff($end_date)->format("%a");

            if($interval >= 2){
              $no_transaksi = $rsq['no_transaksi'];
              $update = "UPDATE transaksi SET status_pembayaran = 'Expired' WHERE no_transaksi = '$no_transaksi'";
              $queryupdate = $mysqli->query($update)
                ?>
                <script>
                alert('Your Request Is Expired!');
                window.location.href="index.php?p=req-order";
                </script>

                <?php

            } // hasil : 217 hari
          }
          else {

          }
           ?>
         <tr>
             <td><?php echo "$rsq[no_transaksi]"; ?></td>
             <td>
                 <?php echo "$rsq[tgl_beli]"; ?>
             </td>

             <td>
                 <?php echo "$rsq[total_bayar]"; ?>
             </td>
             <td>
                 <?php echo "$rsq[status_pembayaran]"; ?>
             </td>
             <td>
                  <a class="btn btn-danger" href="index.php?p=order-detail&not=<?php echo "$rsq[no_transaksi]"; ?>">Order Detail</a>
             </td>
         </tr>
       <?php } ?>
     </tbody>

 </table>
</div>
