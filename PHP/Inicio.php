
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
    <h1 id="titulo">Bienvenido!! Rellene los campos:</h1>
    <form action="/Proyecto Lince/PHP/Insertar.php" method="POST">
        <input type = "text" name="titulo" placeholder="Titulo" class="texto" id="titulo">
        <input type = "text" name="idbuscar" placeholder="ID" class="texto" id="id" required>
        <textarea name="contenido" id="contenido" cols="50" rows="10" class="texto" autocomplete="off">
        </textarea> 
        <input type="submit" value="Crear Nota" class="texto" id="crear">
    </form>
    <form action="/Proyecto Lince/PHP/Modificar.php" method="POST">
        <input type="submit" value="Modificar Nota" class="texto" id="modificar">
    </form>
    <form action="/Proyecto Lince/PHP/Mostrar.php" method="POST">
        <input type="submit" value="Ver Notas" class="texto" id="ver">
    </form>
    </div>
</body>
</html>