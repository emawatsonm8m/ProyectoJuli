<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Statics/diseño.css">
    <link rel="icon" href="../Statics/fabicoin.jpg" type="image/x-icon">
    <title>historial</title>
</head>
<body>
<?php
session_start();

// Verifica la sesion

$a=(isset($_POST['Archivo'])&& $_POST["Archivo"]!="")? $_POST['Archivo']:"Falata valor";

$an=(isset($_POST['NombreArchivo'])&& $_POST["NombreArchivo"]!="")? $_POST['NombreArchivo']:"Falata valor";


$_SESSION["tipo"] = $a;
$t=$_SESSION["tipo"];

$n=$_SESSION["nombre"];
$c=$_SESSION["casa"];
$opcion= $_SESSION["opcion"];

if($opcion==="crear")

{ 
    if($a=="archivo")
    {
        $f=fopen("../Archivos/".$an,"x");
        fclose($f);
    }else{
        mkdir("../Archivos/".$an);
    }
}

// Muestro el historial
echo "<h1>Historial de Acciones</h1>";

/*if (count($_SESSION["historial"]) > 0) {*/
    echo "<table aling='center' class= 'resultados'> 
            <tr>
                <th>Acción</th>
                <th>Tipo de Archivo</th>
                <th>Nombre del Archivo</th>
                <th>Usuario</th>
                <th>Casa</th>
            </tr>";

    /*foreach ($_SESSION["historial"] as $item) {*/
        echo "<tr>
                <td>".$a."</td>
                <td>".$t."</td>
                <td>".$an."</td>
                <td>".$n."</td>
                <td>".$c."</td>
              </tr>";
    /*}*/

    echo "</table>";

/*} else {
    echo "<p>No se ha registrado ninguna acción en el historial.</p>";
}*/

echo "<br>
      <center><a href='../Dynamics/Crear.php'>Volver</a></center>";
      echo "<br>
      <center><a href='../Dynamics/Despedida.php'>Finalizar</a></center>";
      session_destroy();


?>
</body>
</html>