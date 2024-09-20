<?php
// database connection code
$con = mysqli_connect('localhost','root', '', 'schooldatabase');

// check if datase is Connected or not
if (!$con) {
  echo "Database Not Connected";
}
 ?>
