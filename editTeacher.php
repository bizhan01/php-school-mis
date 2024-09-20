<?php ob_start(); ?>
<!-- Content Start -->
<?php
  require_once("database.php");
  $id=$_GET['id'];
  $q="select * from teachers where id =$id";
  $select=mysqli_query($con,$q);
  foreach ($select as $show){?>
    <br>
    <div class="panel panel-primary">
      <div class="panel panel-heading">
        <center><h1>Edit Record</h1></center>
      </div>
      <div class="panel panel-body">
        <form  method="POST">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $show['name']?>" required>
          </div>
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="lastName" value="<?php echo $show['lastName']?>" required>
          </div>
          <div class="form-group">
            <label for="">E-mail Address</label>
            <input type="email" class="form-control" name="email" value="<?php echo $show['email']?>" required>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-info">
            &nbsp &nbsp <input type="reset" name="reset" value="Reset" class="btn btn-primary">
            &nbsp &nbsp <a href="list.php"><button type="button" name="button" class="btn btn-warning">Consel</button></a>
          </div>
        </form>
      </div>
    </div>
    <?php } ?>

    <?php
      if (isset($_POST['submit'])){
       $name=$_POST["name"];
       $lastName=$_POST["lastName"];
       $email=$_POST["email"];

       $q="UPDATE `teachers` SET `name` = '$name', `lastName` = '$lastName', `email` = '$email' WHERE `teachers`.`id` =$id";
        $update=mysqli_query($con, $q);
        if($update){
            header("location:teacherList.php");
        }
        else {
          echo "Not Updated";
        }
      }
    ?>


<!-- Content End  -->
<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
