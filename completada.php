<?php
$texto=$_POST["texto"]
function completar($usuario){
    $mysqli=new mysqli("sql7.freemysqlhosting.net","sql7564092","SlyBea9HlB","sql7564092");
    $res=$mysqli->query("UPDATE tarea SET completada='yes' where tarea='$texto'");
}

?>