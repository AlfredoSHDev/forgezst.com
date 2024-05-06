<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../provider/assets/styles.css">

    <title>ForgezST - Login</title>
</head>
<body>

<img src="../provider/assets/img/logoblack.png" alt="Logotipo ForgezST Black">
    <p>Inicia secion</p>



    <div class="contenedor">
        <form action="../provider/models/acttionlg.php" method="post">

            <label for="email">Correo o Nombre:</label><br>
            <input type="text" name="correo" id="correo"><br><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" name="password" id="password">

            <input type="submit" name="login" value="INICIAR"> 
            <div class="linka">
            <h6>No tienes cuenta! <a href="boardrg.php">REGISTRATE</a></h6>       
        </div>
        
        </form>
    </div>
    <div class="error">
    <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
    <h6>Credenciales incorrectas</h6>
    <?php elseif(isset($_GET['error']) && $_GET['error'] == 2): ?>
    <h6>Usuario no encontrado</h6>

    <?php elseif(isset($_GET['mysql']) && $_GET['mysql'] == 3): ?>
    <h6>Erro de mysql</h6>

<?php endif; ?>
    </div>
</body>
</html>