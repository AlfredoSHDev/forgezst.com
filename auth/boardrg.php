<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../provider/assets/styles.css">

    <title>ForgezST - Registro</title>
</head>
<body>

<img src="../provider/assets/img/logoblack.png" alt="Logotipo ForgezST Black">
    <p>No tienes cuenta? registrate</p>
    <div class="contenedor">
        <form action="../provider/models/acttionrg.php" method="post">
        
        <label for="parametro">Nombre:</label><br>
               <input type="text" name="nombre" id="nombre">

        <label for="parametro">Apellidos:</label><br>
               <input type="text" name="apellidos" id="apellidos">
               
         <label for="parametro">Correo:</label><br>
               <input type="email" name="correo" id="correo"><br><br>

         <label for="parametro">telefono:</label><br>
               <input type="text" name="telefono" id="telefono">
               
         <label for="parametro">Contraseña:</label><br>
               <input type="password" name="password" id="password">

            <input type="submit" name="registro" value="RESGISTRO"> 
            <div class="linka">
            <h6>Tienes cuenta! <a href="boardlg.php ">INICIA SECION</a></h6>           
        </div>
        </form>
    </div>
    
</body>
</html>