<nav>
  <ul>

    <li><a href="index.php" class="m1">Home Page</a></li>
    <?php

      if (isset($_SESSION['hak']))
      {
        ?><li><a href="index.php?p=req-order" class="m2">Request Order</a></li><?php
      }
      else
      {}

    ?>

    <li><a href="index.php?p=payment" class="m2">Payment</a></li>
    <li><a href="index.php?p=contact" class="m2">Contact Us</a></li>

    <?php

      if (isset($_SESSION['hak']))
      {
        ?><li><a href="logout.php" class="m4">Logout</a></li><?php
      }
      else
      {}

    ?>
  </ul>
</nav>
