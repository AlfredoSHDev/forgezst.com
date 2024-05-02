<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/minist.css">
    <link rel="stylesheet" href="../../css/allf.css">
    <title>ForgezST - Eliminar</title>
</head>
<body>


    <div id="navbarContainer"></div>

    <main>
        <div class="fomrs">
            <h1>ELIMINAR PRODUCTO</h1>
            <form action="../providers/models/delete.php" method="post">
                <label for="id-p">ID Producto:</label>
                    <input type="text" name="id-p" id="id-p" placeholder="ÍD del producto"><br>

                        <input type="submit" value="ELIMINAR">  
            </form>
        </div>
    </main>
    
</body>

<script src="../../js/navbar.js"></script>
    <script>
        const navbarContainer = document.getElementById('navbarContainer');
        const navbar = createNavbar();
        navbarContainer.appendChild(navbar);
    </script>
    <a href=""></a>

</html>