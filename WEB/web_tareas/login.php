<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$mysqli=new mysqli("sql7.freemysqlhosting.net","sql7564092","SlyBea9HlB","sql7564092");
$res=$mysqli->query("select * from usuarios where usuario='$usuario'");
$fila=$res->fetch_assoc();

$verusuario=$fila["usuario"];
$verpassword=$fila["password"];

if($usuario==$verusuario && $password==$verpassword){
    header("location:principal.php");
}
else{
    header("location:login.php");
}

$res->close();
$mysqli->close();
?>

//areglar verificación de usuarios y contraseña (no se verifica de forma correcta)