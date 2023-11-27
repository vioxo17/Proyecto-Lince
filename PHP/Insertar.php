
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
    

    
    <div class="texto1">
    <h1>Crear nota</h1>

    <?php
   

        include("libreria.php");

        $titulo = $_POST["titulo"];
        $contenido = $_POST["contenido"];
        $idbuscar = $_POST["idbuscar"];

        $nota = new tablas($titulo, $contenido, $idbuscar);
         $nota->insertar();
    ?>
    </div>

    


</body>
</html>