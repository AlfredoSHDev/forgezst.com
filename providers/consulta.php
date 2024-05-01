<?php

include("conexion.php");

if(isset($_POST['consultar'])){
    $idparamatro = $_POST['idparamatro'];
    if(!$conex){
        echo "Error de conexión";
    }else{
        $sql = "SELECT id_producto, nombre, precio, categoria FROM productos WHERE nombre LIKE '%$idparamatro%'";
        $result = $conex->query($sql);
        if($result->num_rows > 0){
            echo "<table border='1'>
            <tr>
                <th>Id-producto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>".$row["id_producto"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["precio"]."</td>
                <td>".$row["categoria"]."</td>
                </tr>";
            }
            echo "</table>";
        }else{
            echo "<h1>0 resultados</h1>";
        }
        $conex->close();
    }
}

?>
