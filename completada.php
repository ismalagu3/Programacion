<?php
$texto=$_POST["texto"];

function completar($texto){
    $mysqli=new mysqli("sql7.freemysqlhosting.net","sql7564092","SlyBea9HlB","sql7564092");
    $res=$mysqli->query("UPDATE tarea SET completada='yes' where tarea='$texto'");
}

completar($texto);

$res->close();
$mysqli->close();
?>
//revisar conexión con la bbdd y la consulta realizada