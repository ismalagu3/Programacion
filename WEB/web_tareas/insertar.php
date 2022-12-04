<?php   
$tarea=$_POST['tarea'];

$mysqli=new mysqli("sql7.freemysqlhosting.net","sql7564092","SlyBea9HlB","sql7564092");
$query="INSERT INTO tarea (tarea) VALUES ('$tarea')";
$res=$mysqli->query($query);
?>