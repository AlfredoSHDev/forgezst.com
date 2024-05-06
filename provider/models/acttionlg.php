<?php
session_start();
include("../conexion.php");
if(!$conex){
    header("Location: ../../auth/boardlg.php?mysql=3");
    exit;
}
if(isset($_POST['correo']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $correo = validate($_POST['correo']);
    $password = validate($_POST['password']);

    if(empty($correo) || empty($password)){
        header("Location: ../../auth/boardlg.php?error=1");
        exit;
    }else{
        // Utilizando MD5 para la contraseña
        $password_md5 = md5($password);

        $sql = "SELECT * FROM acounts WHERE correo=:correo OR nombre=:nombre";
        $stmt = $conex->prepare($sql);
        $stmt->execute(array(':correo' => $correo, ':nombre' => $correo));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row && $row['password']  === $password_md5){ // Comparando con la contraseña MD5 de la base de datos
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['correo'] = $row['correo'];
            $_SESSION['iduser'] = $row['iduser'];

            $update_sql = "UPDATE accounts SET Status='Activo' WHERE iduser=:iduser";
            $update_stmt = $conex->prepare($update_sql);
            $update_stmt->execute(array(':iduser' => $row['iduser']));

            if($row['Typeuser'] == 'admin'){
                header("Location: ../dashboards/Admin/dashb.php");
                exit;
            }else if($row['Typeuser'] == 'user'){
                header("Location: ../dashboards/users/panel.php");
                exit;
            }
        }else{
            header("Location: ../../auth/boardlg.php?error=1");
            exit;
        }
    }
}else{
    header("Location: ../../auth/boardlg.php");
    exit;
}
?>
