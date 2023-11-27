<?php

class db{

    private $servidor;
    private $usuario;
    private $contraseña;
    private $basededatos;
    protected $conexion;

    function __construct(){

        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->contraseña = "";
        $this->basededatos = "notas";
        $this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->contraseña, $this->basededatos);

    }

    function conexion(){


        if($this->conexion == TRUE){

           echo "Has sido conectado a la base de datos correctamente!";

        }
        else{
            echo "No se puedo conectar a la base de datos correctamente", mysqli_connect_error();
        }
    }

    function cerrarconexion(){
        mysqli_close($this->conexion);
    }
}

class tablas extends db{

    private string $titulo;
    private string $contenido;
    private string $modificacion;
    private string $idbuscar;

    function __construct($titulo, $contenido, $idbuscar){
        parent::__construct();
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->idbuscar = $idbuscar;
    }
    function insertar(){
        $consulta = "INSERT INTO notas (titulo, contenido, modificacion, idbuscar) VALUES ('$this->titulo', '$this->contenido', 'NOW()', '$this->idbuscar')";
        $seleccionar = mysqli_query($this->conexion, $consulta);

        if($seleccionar){

            echo "La consulta se ha insertado correctamente.";
        }else{
            echo "La consulta no ha sido introduccida correctamente.". mysqli_error($this->conexion); 
        }
        mysqli_close($this->conexion);

    }
    function update(){
        $consulta = "UPDATE notas set titulo='$this->titulo', contenido='$this->contenido', modificacion=NOW() WHERE idbuscar='$this->idbuscar'";
        $seleccionar = mysqli_query($this->conexion, $consulta);
        if($seleccionar){
            echo "La consulta fue modificada correctamente.";
        }else{
            echo "La consulta no fue modificada correctamente.". mysqli_error($this->conexion);;
        }
        mysqli_close($this->conexion);
    }

    

}


class mostrar extends db{


    function __construct(){
        parent::__construct();
    }

    function seleccionar(){
        $consulta = "SELECT * FROM notas";
        $seleccionar =  mysqli_query($this->conexion, $consulta);
        if ($seleccionar){
            while ($columna = mysqli_fetch_assoc($seleccionar)){
                echo "<br><h3>Titulo:</h3> ", "-",$columna["titulo"], " <h3>Contenido:</h3> ", "-",$columna["contenido"], "<h3>Fecha Modificación:</h3> ", "-",$columna["modificacion"], "ID: ", "-",$columna["idbuscar"],  "</br>";
                echo "<br>---------------------------------";
            }
        }
        else{
            echo "Error en la consulta". mysqli_error($this->conexion);
        }
        mysqli_close($this->conexion);
    }

}

class mostrarporid extends db{

    private string $idbuscar;

    function __construct($idbuscar){
        parent::__construct();
        $this->idbuscar = $idbuscar;
    }
    function seleccionar2(){
        $consulta = "SELECT titulo, contenido, modificacion FROM notas WHERE idbuscar = '$this->idbuscar'";
        $seleccionar = mysqli_query($this->conexion, $consulta);
        if ($seleccionar){
            while ($columna = mysqli_fetch_assoc($seleccionar)){
                echo "<br><h3>Titulo:</h3> ", $columna["titulo"], " <h3>Contenido:</h3> ", $columna["contenido"], "<h3>Fecha Modificación:</h3> ", $columna["modificacion"],"</br>";
            }
        }
        else{
            echo "Error en la consulta". mysqli_error($this->conexion);
        }
        mysqli_close($this->conexion);
    }
    

}











?>