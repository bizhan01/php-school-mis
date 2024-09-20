<?php
    require_once("database.php");
    if (isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

        $q="select * from users where email='$email' AND password='$password'";
        $result=mysqli_query($con,$q);
        if(mysqli_num_rows($result)>0){
          session_start();
          $_SESSION['check']=$email;
          header("location:index.php");
        }
        else {
           header("location.login.php?login=invalid");
        }
    }
   ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
        <br></br>
        <div class="panel panel-primary">
          <div class="panel panel-heading">
            <center><h1>Please Login Here</h1></center>
          </div>
          <div class="panel panel-boby">
            <form  method="post"  style="padding: 20px">
              <?php
               if(isset($_POST['submit'])){?>
                <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" arira-lable="alart" >&times;</a>
                  <p>Incerrect Username or Password!</p>
                </div>
              <?php } ?>
              <div class="form-group">
                <label for="">Username (Email Address)</label>
                <input type="email"  name="email"  class="form-control" placeholder="someone@domail.com" value="" required>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password"  name="password" class="form-control" placeholder="*************"  value="" required>
              </div>
              <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary form-control"   value="Login" >
              </div>
            </form>
          </div>
          <div class="panel panel-footer">
            Don't you hava an account? <a href="register.php">Click Here</a>
          </div>
        </div>
        <br></br>
        <br></br>
      </div>
    </div>
  </body>
</html>
