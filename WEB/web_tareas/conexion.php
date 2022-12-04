<?php
$mysqli=new mysqli("sql7.freemysqlhosting.net","sql7564092","f*%hzjac&ivYD#U#","sql7564092");
$res=$mysqli->query("select * from web where usuario='$usuario'");
$fila=$res->fetch_assoc();
$res->close();
$mysqli->close();
?>