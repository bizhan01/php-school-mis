<?php ob_start(); ?>
<br>
<div class="panel panel-primary">
  <div class="panel panel-heading">
    <center><h1>Records List</h1></center>
  </div>
  &nbsp &nbsp <a href="addStudent.php"><button type="button" name="button" class="btn btn-primary">Add New Record</button></a>
  <div class="panel panel-body">
    <table class="table table-bordered table-hovered text-center">
      <tr>
        <th>Number</th>
        <th>Image</th>
        <th>ID</th>
        <th>NAME</th>
        <th>LAST NAME</th>
        <th>E-MAIL ADDRESS</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>


      <?php
      require_once('database.php');
      $select = "select * from students";
      $q = mysqli_query($con, $select);
      foreach ($q as $key => $show) {?>
      <tr>
        <td><button type="button" name="button" class="btn btn-primary"><?php echo $key+1; ?></button></td>
        <td><a href="uploadedImages/<?php echo $show["image"]; ?>"><img src="uploadedImages/<?php echo $show["image"]; ?>" width="50px" /></a></td>
        <td><?php echo $show["id"]; ?></td>
        <td><?php echo $show["name"]; ?></td>
        <td><?php echo $show["lastName"]; ?></td>
        <td><?php echo $show["email"]; ?></td>
        <td><a href="editStudent.php?id= <?php echo $show ['id'] ?>"><span class="fa fa-edit" style="color: blue"></span></a></td>
        <td><a href="deleteStudent.php?id= <?php echo $show ['id'] ?>" onclick='return confirm("آیا مطمین استید حذف شود؟")'><span class="fa fa-trash" style="color: red"></span></a></td>
      </tr>
      <?php } ?>
    </table>

    <?php
      require_once('database.php');
      $sql="select count('id') from students";
      $result=mysqli_query($con,$sql);
      $rows=mysqli_fetch_array($result);
      mysqli_close($con);
    ?>
    <center><h3>Number of records are: <?php       echo "$rows[0]"; ?> </h3></center>
  </div>
</div>
<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
