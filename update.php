<!DOCTYPE HTML>
<html>
    <head>
        <title>update</title>

</head>
<body>

<?php

include 'connection.php';
$id=$_GET['id'];

$query ="select * from student where id = $id";
$variable= $con->query($query);
print_r($variable);

$row=$variable->fetch_assoc();
print_r($row);

$name=$row['name'];
$age=$row['age'];
$course=$row['course'];


if(isset($_POST['name1'])){
$name=$_POST['name1'];
$age=$_POST['age'];
$course=$_POST['course1'];
$update= "update  student set name='$name', age='$age', course='$course' where id = $id";
$result = $con->query($update);

//redirect show page
header("location: /webClass/fetch.php");
}


?>


<center>
<form method="post">
  <label >Name:</label><br>
  <input type="text" name="name1" value="<?php echo $name ?>"  required><br>
 
  <label >Age:</label><br>
  <input type="number"  name="age" value="<?php echo $age ?>"><br><br>

  <label >Course:</label><br>
  <input type="text" name="course1" value="<?php echo $course ?>"><br>

  <input type="submit" value="Submit">
</form> 
</center>



</body>
</html>