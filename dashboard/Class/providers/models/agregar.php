<?php
include("conexion.php");
if(isset($_POST['agregar'])){
    if(!$conex){
        echo "Error al conectarme al servidor";
    }else{
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio']; 
        $imagen = $_POST['imagen'];
        $option = $_POST['option'];

        $consulta = "INSERT INTO productos(nombre,precio,categoria,imgpro) VALUES 
        ('$nombre', '$precio', '$option', '$imagen')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            echo "DATOS AGREGADOS";
        }else{
            echo "Error no se pudieron agregar";
        }
    }
}

?>