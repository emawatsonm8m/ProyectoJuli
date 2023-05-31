<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Statics/diseño.css">
    <link rel="icon" href="../Statics/fabicoin.jpg" type="image/x-icon">
    <title>1</title>
</head>
<body>
<?php

    $usuario = isset($_POST["Usuario"]) && $_POST["Usuario"] != "" ? $_POST["Usuario"] : false;
    /*setcookie("Usuario", $usuario);*/

    $casa = isset($_POST["Casa"]) && $_POST["Casa"] != "" ? $_POST["Casa"] : false;
    /*setcookie("Casa", $casa);*/

    session_start();
    $_SESSION["nombre"] = $usuario;
	$_SESSION["casa"] = $casa;


    $casa1 = "<img src='../Statics/Ajolote.jpg' alt='Ajolote'>";
    $casa2 = "<img src='../Statics/Teporingos.jpg' alt='Teporingo'>";
    $casa3 = "<img src='../Statics/Halcones.jpg' alt='Halcon'>";

    $ajolotes = "Ajolotes";
    $teporingos = "Teporingos";
    $halcones = "Halcones";

    if ($casa == $ajolotes) {
        $casa = $casa1;
    }
    if ($casa == $teporingos) {
        $casa = $casa2;
    }
    if ($casa == $halcones) {
        $casa = $casa3;
    }
    
    echo "<form action='../Dynamics/Crear.php' method='post' target='_blank'>
        $casa <br>
        <h1>¿Qué deseas hacer, $usuario?</h1>
        <div>
            <label>Acciones:</label><br><br>
        <label> Crear <br>
            <input type='radio' name='opcion' value='crear'>
        </label>
        
        <label>Renombrar <br>
            <input type='radio' name='opcion' value='renombrar'>
        </label>

        <label>Eliminar <br>
            <input type='radio' name='opcion' value='eliminar'>
        </label>

        <button type='submit'>Siguiente</button>

        </div>
    </form>
    <br>
    <form action='../Templates/index.html' method='post' target='_blank'>
        <button>Registro</button>
        <button>Salir</button>
    </form>"

?>
</body>
</html>