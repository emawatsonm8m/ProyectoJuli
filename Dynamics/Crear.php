<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Statics/diseño.css">
    <link rel="icon" href="../Statics/fabicoin.jpg" type="image/x-icon">
    <title>Crear</title>
</head>
<body>
<?php

$usuario = isset($_POST["Usuario"]) && $_POST["Usuario"] != "" ? $_POST["Usuario"] : false;
/*setcookie("Usuario", $usuario);*/

$casa = isset($_POST["Casa"]) && $_POST["Casa"] != "" ? $_POST["Casa"] : false;

session_start();

$crear2 = "crear";
$renombrar2 = "renombrar";
$eliminar2 = "eliminar";
$accion = ""; // Variable para almacenar la acción seleccionada

if (isset($_POST["opcion"])) {
    $opcion = $_POST["opcion"];

    if ($opcion === "crear") {
        $accion = $crear2;
    } elseif ($opcion === "renombrar") {
        $accion = $renombrar2;
    } elseif ($opcion === "eliminar") {
        $accion = $eliminar2;
    }
}


$_SESSION["accion"] = $accion;
$_SESSION["opcion"] = $opcion;

echo "<form action='../Dynamics/historial.php' method='post' target='_blank'>
        <br>
        <h1>¿Qué tipo de archivo deseas $accion $usuario?</h1>
        <div>
            <label>Archivo o Carpeta</label><br>
        <label> Archivo <br>
            <input type='radio' name='Archivo' value='archivo'>
        </label>
        
        <label>Carpeta <br>
            <input type='radio' name='Archivo' value='carpeta'>
        </label>

        <label>Nombre: <br>
            <input type='text' name='NombreArchivo'>
        </label>

        <button type='submit'>Siguiente</button>

        </div>
    </form>
    <br>
    <form action='../Templates/index.html' method='post' target='_blank'>
        <button>Registro</button>
        <button>Salir</button>
    </form>";

    

    
?>

</body>
</html>