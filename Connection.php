<?php
$dbhost="localhost"; //server host
$dbuser="root"; // root user is default
$dbpass="";
$dbname="lab"; //table name

//connection 
//mysqli means library function

$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
//to check dbms connection we have to write
if($con->connect_error){ //connect_error property
die("Connection failed"); // do to try and close the attempt using die function

}

?>