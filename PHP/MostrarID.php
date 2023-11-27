<!DOCTYPE html>
<html>
<head>
    <title>DiegoBouzas</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/Proyecto Lince/CSS/Estilos.css'>
</head>
<body>
    
    <h1>Se mostrará la nota designada</h1>
    
<?php

    include("libreria.php");

    $idbuscar = $_POST["idbuscar"];

    $nota = new mostrarporid($idbuscar);
    $nota->seleccionar2();
   
    

?>

    


</body>
</html>