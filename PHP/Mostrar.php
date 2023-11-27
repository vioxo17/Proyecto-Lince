
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
    <div id="centro2">
    <h1>Se van a mostrar las notas que usted ha creado:</h1>
    <p>Si desea buscar una nota en concreto establezca el identificador en el siguiente cuadro:</p>
    <form action="/Proyecto Lince/PHP/MostrarID.php" method="POST">
        <input type = "text" name="idbuscar" placeholder="ID" class="texto" id="id2" required>
        <input type="submit" value="Buscar Nota" class="texto" id="ver2">
    </form>
    </div>
    
    <div id="centro">
    <?php
   

        include("libreria.php");
        $nota = new mostrar();
        $nota->seleccionar();
    


    ?>
    </div>

    


</body>
</html>