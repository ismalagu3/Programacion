<?php
$tarea=$_POST['tarea'];

$mysqli=new mysqli("sql7.freemysqlhosting.net","sql7564092","SlyBea9HlB","sql7564092");
$res=$mysqli->query("INSERT INTO tarea(tarea) VALUES ('$tarea')");

if ($res) {
    header("Location:principal.php");
} else {
    header("Location:principal.php");
}

$res->close();
$mysqli->close();
?>