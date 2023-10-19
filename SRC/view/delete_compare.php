<?php
session_start();
if (isset($_POST['delete1'])) {
    $_SESSION['sp1'] = 0;
    header("location: sosanh.php");
    exit();


} else if (isset($_POST['delete2'])) {
    $_SESSION['sp2'] = 0;
    header("location: sosanh.php");
    exit();
}
?>