<?php ob_start(); ?>
<h1>Teacher List</h1>
<table class="table table-bordered table-hovered">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>LAST NAME</th>
    <th>E-MAIL ADDRESS</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
  require_once('database.php');
  $select = "select * from teachers";
  $q = mysqli_query($con, $select);
  foreach ($q as $show) {?>
  <tr>
    <td><?php echo $show["id"]; ?></td>
    <td><?php echo $show["name"]; ?></td>
    <td><?php echo $show["lastName"]; ?></td>
    <td><?php echo $show["email"]; ?></td>
    <td><a href="editTeacher.php?id= <?php echo $show ['id'] ?>"><span class="fa fa-edit" style="color: blue"></span></a></td>
    <td><a href="deleteTeacher.php?id= <?php echo $show ['id'] ?>" onclick='return confirm("آیا مطمین استید حذف شود؟")'><span class="fa fa-trash" style="color: red"></span></a></td>
  </tr>
  <?php } ?>
</table>
<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
