<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas de Casa</title>
    <link rel="stylesheet" href="./css.css">
</head>
<body>
    <header>
        <h1>
            Tareas de Casa
        </h1>
    </header>

    <main>
        <form action="#">
            <p>Selecciona que quieres hacer</p>
            <select name="select" id="select">
                <option selected disabled>Elige una opción</option>
                <option value="ver">Ver Tareas</option>
                <option value="insertar">Insertar Tareas</option>
            </select>
        </form>
    </main>

    <section id="centro">
        <article id="insertar" class="deshabilitado">
            <form action="./insertar.php" method="post">
                <label for="tarea">Introduce la tarea</label><br><br>
                <input type="text" id="tarea" name="tarea"><br><br>
                <button id="boton_agregar" type="submit">Agregar Tarea</button>
            </form>
        </article>

        <article id="ver" class="deshabilitado">
                <?php
                    $mysqli=new mysqli("sql7.freemysqlhosting.net","sql7564092","SlyBea9HlB","sql7564092");
                    $res=$mysqli->query("select tarea from tarea");
                    $fila=$res->fetch_assoc();

                    while($fila){
                        echo "<p>".$fila["tarea"]."</p>";
                        $fila=$res->fetch_assoc();
                    }
                ?>
        </article>

    </section>

<script src="./jquery.js"></script>
<script src="./accion1.js"></script>
</body>
</html>