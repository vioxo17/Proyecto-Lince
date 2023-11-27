
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
    <h1>Modificar la nota</h1>
    <p>Escriba el "Identificador" asignado a la nota que quiera modificar</p>
    <form action="/Proyecto Lince/PHP/ModificarTodo.php" method="POST">
        <input type = "text" name="idbuscar" placeholder="ID" class="texto" id="id">
        <p>Escriba los datos para modificar la nota</p>
        <input type = "text" name="titulo" placeholder="Nuevo Titulo" class="texto" id="titulo">        
        <textarea name="contenido" id="contenido2" cols="60" rows="20" class="texto"></textarea> 
        <input type="submit" value="Modificar Nota" class="texto" id="modificar">
    </form>
    </div>

   

</body>
</html>