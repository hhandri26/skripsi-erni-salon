<?php


 ?>

<div class="table-responsive" style="height:200px">
<table class="table table-bordered table-hover table-striped" border="1">
    <thead>
         <tr>
             <th>Action</th>
             <th>Book Title</th>
             <th>Price</th>
             <th>Qty</th>
             <th>Sub Total</th>
             <th>Add More</th>
         </tr>
     </thead>


     <tbody>
       <?php
       if (isset($_SESSION['items'])) {$total = 0;
           foreach ($_SESSION['items'] as $key => $val){
             $q = "SELECT * FROM buku WHERE id_buku = '$key'";
             $queryq = $mysqli->query($q);
             $rsq = mysqli_fetch_array ($queryq);
             

             //echo "$key $val". $_SESSION['items'];
        ?>
         <tr>
           <form action="pages/aksi_checkout.php" method="post">
           <input type="hidden" name="id_buku[]" value="<?php echo "$key"; ?>">
           <input type="hidden" name="judul_buku[]" value="<?php echo "$rsq[judul_buku]"; ?>">
           <input type="hidden" name="harga_buku[]" value="<?php echo "$rsq[harga_buku]"; ?>">
           <input type="hidden" name="qty[]" value="<?php echo "$val"; ?>">


             <td><a href="pages/aksi_beli.php?act=del&id=<?php echo $key; ?>" class="btn btn-xs btn-danger fa fa-times" style="color:#fff"></a></td>
             <td>
                 <?php echo "$rsq[judul_buku]"; ?>
             </td>
             <td>
                 <?php echo "$rsq[harga_buku]"; ?>
             </td>
             <td>
                  <?php echo $val ?>
             </td>
             <td>
                  <?php $sub = $val*$rsq['harga_buku']; ?>
                  <?php echo $sub;
                  ?>
                  <input type="hidden" name="sub[]" value="<?php echo "$sub"; ?>">

             </td>
             <td>
              <a href="pages/aksi_beli.php?act=add&id=<?php echo $key; ?>" class="btn btn-xs btn-danger fa fa-plus" style="color:#fff"></a>
             </td>
         </tr>
         <?php $total += $sub;}} ?>
         <tr>
             <th colspan="4">Total</td>
             <th>
               <?php
               if (!empty($total)) {

                 echo $total;
               }
               ?>
               <input type="hidden" name="total" value="<?php echo "$total"; ?>">
             </th>
             <td>
               <?php if (!empty($total)){ ?>
               <button type="submit"><a class="btn btn-xs btn-danger fa fa-arrow-circle-right" style="color:#fff">Checkout</a></button>
               <?php } ?>
             </td>
             </form>
         </tr>
     </tbody>

 </table>
</div>
