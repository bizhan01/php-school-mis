<?php
session_start();
unset($_SESSION['check']);
header("location:login.php");
 ?>
