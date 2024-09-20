<?php
  session_start();
  require_once("database.php");

  if (isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $q="INSERT INTO `users` ( `name`, `email`,`password`) VALUES ( '$name', '$email','$password')";
     $insert = mysqli_query($con, $q);
     if($insert){
       header('Location:login.php');
     }
     else {
      $_SESSION['field']=true;
     }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="icon" type="icon-x image" href="img/about.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <br></br>
        <div class="panel panel-info">
          <div class="panel panel-heading">
            <center><h1>Please Register Here</h1></center>
          </div>
          <div class="panel panel-boby">
            <form  method="post" style="padding: 20px">
              <?php
                 if(isset($_SESSION['field']))
                   { ?>
                    <div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                        <h4>
                          <?php
                           if($_SESSION['field']==true)
                           {
                             echo "The Email Address Already Taken";
                           }
                           ?>
                       </h4>
                     </div>
                  <?php  }?>
              <div class="form-group">
                <label for="">Full Name</label>
                <input type="text"  name="name" class="form-control" placeholder="ALi Poor"   value="" required>
              </div>
              <div class="form-group">
                <label for="">Email Address</label>
                <input type="email"  name="email" class="form-control" placeholder="someone@domail.com"  value="" required>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="*************"   value="" required>
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-info form-control"  name="submit" value="Login" >
              </div>
            </form>
          </div>
          <div class="panel panel-footer">
            Already have an acount: <a href="login.php">Click Here</a>
          </div>
        </div>
        <br></br>
        <br></br>
      </div>
    </div>
  </body>
</html>
