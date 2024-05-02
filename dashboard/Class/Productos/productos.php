<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/minist.css">
    <link rel="stylesheet" href="../../css/consul.css">
    <title>ForgezST - Productos</title>
</head>
<body>

    <div id="navbarContainer"></div>

    <main>
        
        <div class="fomrs">
            <h1>LISTADO DE PRODUCTOS</h1>
            <form action="../providers/models/consultas.php" method="POST">

                <label for="idparamatro">ID Producto:</label>
                    <input type="text" name="idparamatro" id="idparamatro" placeholder="ÍD del producto"><br>
                    <button type="submit" name="consultar">Consultar</button> 
            </form>
        </div>
    </main>

    <script src="../../js/navbar.js"></script>
    <script>
        const navbarContainer = document.getElementById('navbarContainer');
        const navbar = createNavbar();
        navbarContainer.appendChild(navbar);
    </script>
    <a href=""></a>
</body>
</html>
