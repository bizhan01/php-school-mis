<?php ob_start(); ?>
  <?php
    require_once("database.php");
    $id=$_GET['id'];
    $q="select * from students where id =$id";
    $select=mysqli_query($con,$q);
    foreach ($select as $show){?>
     <br>
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <center><h1>Edit Record</h1></center>
        </div>
        <div class="panel panel-body">
          <form  method="POST" enctype="multipart/form-data">
            <div class="col-lg-8">
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
            </div>
            <div class="col-lg-4">
              <input type="hidden" name="image" value="<?php echo $show['image']?>">
               <img src="uploadedImages/<?php echo $show['image']?>"  class="img img-responsive" />
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input type="submit" name="submit" value="Update" class="btn btn-info">
                &nbsp &nbsp <input type="reset" name="reset" value="Reset" class="btn btn-primary">
                &nbsp &nbsp <a href="list.php"><button type="button" name="button" class="btn btn-warning">Consel</button></a>
              </div>
            </div>
          </form>
        </div>
      </div>
  <?php } ?>

  <?php
    if (isset($_POST['submit'])){
     $name = $_POST["name"];
     $lastName = $_POST["lastName"];
     $email = $_POST["email"];
     $image = $_POST["image"];


     $q="UPDATE `students` SET `name` = '$name', `lastName` = '$lastName', `email` = '$email',  `image` = '$image' WHERE `students`.`id` =$id";
      $update=mysqli_query($con, $q);

      if($update){
          header("location:list.php");
      }
      else {
        echo "Not Updated";
      }
    }
  ?>

<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
