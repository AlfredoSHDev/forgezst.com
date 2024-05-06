<?php
include("../conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo']; // Cambiado de 'coreo' a 'correo'
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    
    // Verificar si el correo ya está registrado
    $consulta_verificacion = "SELECT * FROM acounts WHERE correo='$correo'"; // Cambiado de 'coreo' a 'correo'
    $result_verificacion = mysqli_query($conex, $consulta_verificacion);
    if (mysqli_num_rows($result_verificacion) > 0) {
        echo "El correo electrónico ya está registrado. Por favor, utiliza otro correo.";
        exit();
    }
    
    // Utilizando MD5 para hashear la contraseña
    $password = md5($password);

    if (!$conex) {
        echo "Error al conectarme al servidor";
    } else {
        $consulta = "INSERT INTO acounts (nombre, apellidos, correo, telefono, password, Typeuser) 
                     VALUES ('$nombre', '$apellidos', '$correo', '$telefono', '$password', 'user')"; // Cambiado de 'coreo' a 'correo'

        if (mysqli_query($conex, $consulta)) {
            // Redireccionar u mostrar un mensaje de éxito
            header("Location: ../../auth/boardlg.php");
            exit();
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conex);
        }
    }
}
?>
