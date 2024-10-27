<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>
<table>
    <th> Player Name </th>
    <th> Age </th>
    <th> Course </th>
    <th> Action </th>

<?php

include 'connection.php';



$query= "select * from student";
$q=$con->query($query); //execute and store in $q variable

while($row=$q->fetch_assoc()){
echo "<tr>
<td>$row[name] </td> 
<td> $row[age] </td> 
<td> $row[course]</td>
<td>
<button> <a href='delete.php?id=$row[id]' > Delete </a></button>
<button> <a href='update.php?id=$row[id]' > Update </a></button>
</td>
</tr>
";

}

?>


</table>
</body>
</html>