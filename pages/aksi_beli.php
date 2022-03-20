<?php
    
    if (!isset($_SESSION)) {
        session_start();
    }

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    if ($act == "add") {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (empty($_SESSION['items'][$id])) {
                $_SESSION['items'][$id] = 1;
            }
            else {
                $_SESSION['items'][$id] += 1;
            }
        }
    } elseif ($act == "del") {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_SESSION['items'][$id])) {
                unset($_SESSION['items'][$id]);
            }
        }
    } elseif ($act == "clear") {
        if (isset($_SESSION['items'])) {
            foreach ($_SESSION['items'] as $key => $val) {
                unset($_SESSION['items'][$key]);
            }
            unset($_SESSION['items']);
        }
    }

    ?>
    <script>
    alert('Data Terpilih <?php echo "$id" ?>');
    window.location.href="../index.php?p=keranjang";
    </script><?php
}
 ?>
