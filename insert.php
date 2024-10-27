<!DOCTYPE HTML>
<html>
    <head>
        <title>insert</title>

</head>
<body>

<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="lab";

//$con = new_mysqli($dbhost, $dbuser, $dbpass, $dbname);
$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($con->connect_error){
    die("connection failed");

}



if(isset($_POST['fname'])){
$name=$_POST['name1'];
$age=$_POST['age'];
$course=$_POST['course1'];
$insertQ= "insert into student (name,age,course) values ('$name', '$age','$course')";
$result = $con->query($insertQ);
}


?>


<center>
<form method="post">
  <label >Name:</label><br>
  <input type="text" name="name1" value=""  required><br>
 
  <label >Age:</label><br>
  <input type="number"  name="age" value=""><br><br>

  <label >Course:</label><br>
  <input type="text" name="course1" value=""><br>

  <input type="submit" value="Submit">
</form> 
</center>



</body>
</html>