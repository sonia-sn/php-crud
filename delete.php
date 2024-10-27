<?php

include 'connection.php';   //connect with database using connection.php file

$id=$_GET['id'];

$query ="delete from student where id=$id";
$con->query($query);

//redirect to show page
header("location: /webClass/fetch.php");




?>