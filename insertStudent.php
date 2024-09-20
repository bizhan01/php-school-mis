<?php
 session_start();
 require_once("database.php");

 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];

    $target="UploadedImages/".basename($_FILES['image']['name']);

    $image = $_FILES['image']['name'];

    $q="insert into students values (null, '$name', '$lastName', '$email', '$image')";
    mysqli_query($con, $q);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
      header('Location:addStudent.php');
       $_SESSION['success']=true;
      }
      else {
        echo "Not Uploaded";
      }
    }
 ?>
