<?php ob_start(); ?>

<center>
  <br><br>
  <img src="img/about.png" class="img img-cicle" height="100px" alt="" />
  <h1>Welcome To Yaghona High School</h1>
  <h1>Management Information System</h1>
  <br><br>
</center>

<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
