<?php
  session_start();
  if(!$_SESSION['check'])
  {
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Yaghona High School</title>
    <link rel="icon" type="icon-x image" href="img/about.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <header class="col-lg-12 col-md-12 col-sm-12">
         <h2>this the header</h2>
      </header>
      <nav class="col-lg-12 col-md-12 col-sm-12">
        <div class="col-lg-9">
          <ul>
            <a href="index.php"><li>Home</li></a>
            <a href="#"><li>News</li></a>
            <a href="#"><li>Event</li></a>
            <a href="#"><li>About Us</li></a>
            <a href="#"><li>Contact</li></a>
            <a href="logout.php"><li class="fa fa-power-off" style="color: red"> Logout</li></a>
          </ul>
        </div>
        <div class="col-lg-3">
            <form >
              <div class="input-group">
              <span class="input-group-addon">Search</span>
              <input type="text" class="form-control" placeholder="You Can Search Here...">
              </div>
           </form>
        </div>
      </nav>
      <aside class="col-lg-3 col-md-3 col-sm-3">
        <ul>
          <a href="addStudent.php"><li>Students</li></a>
          <a href="studentList.php"><li>Student List</li></a>
          <a href="teacher.php"><li>Teachers</li></a>
          <a href="teacherList.php"><li>Teacher List</li></a>
          <a href="#"><li>Something here</li></a>
          <a href="#"><li>Something here</li></a>
          <a href="#"><li>Something here</li></a>
          <a href="#"><li>Something here</li></a>
          <a href="#"><li>Something here</li></a>
          <a href="#"><li>Something here</li></a>
        </ul>
      </aside>
      <section class="col-lg-9 col-md-9 col-sm-9">
        <?php
          if(isset($data)){
            echo $data;
          }
          else {

          }
        ?>
      </section>
      <footer class="col-lg-12 col-md-12 col-sm-12">
          <h5>Copy Right <span class="fa fa-heart" style="color: red"></span> By: Alipoor </h5>
      </footer>
    </div>
  </body>
</html>
