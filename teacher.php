<?php ob_start(); ?>

<br>
<div class="panel panel-primary">
  <div class="panel panel-heading">
    <center><h1>Add New Record</h1></center>
  </div>

   <?php
      if(isset($_SESSION['success']))
        { ?>
         <div class="alert alert-success">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
           <center>
           <h2>Success Message :)</h2>
             <h4>
               <?php
                if($_SESSION['success']==true)
                {
                  echo "معلومات موفقانه ذخیره شده";
                }
                session_destroy();
                ?>
            </h4>
          </center>
          </div>
       <?php  }?>

  &nbsp &nbsp <a href="teacherList.php"><button type="button" name="button" class="btn btn-primary">Records List</button></a>
  <div class="panel panel-body">
    <form action="insertTeacher.php" method="POST">
      <div class="form-group">
        <label for="">First Name</label>
        <input type="text" class="form-control" name="name" value="" required>
      </div>
      <div class="form-group">
        <label for="">Last Name</label>
        <input type="text" class="form-control" name="lastName" value="" required>
      </div>
      <div class="form-group">
        <label for="">E-mail Address</label>
        <input type="email" class="form-control" name="email" value="" required>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="SAVE" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
