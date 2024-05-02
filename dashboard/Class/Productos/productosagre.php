<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/minist.css">
    <link rel="stylesheet" href="../../css/allf.css">
    <title>ForgezST - Agregar</title>
</head>
<body>


    <div id="navbarContainer"></div>

    <main>
        <div class="fomrs">
            <h1>AGREGAR PRODUCTOS</h1>
            <form action="../providers/models/agregar.php" method="post">
                <label for="parametro">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre del producto"><br>

                    <label for="parametro">Precio:</label>
                    <input type="text" name="precio" id="precio" placeholder="Precio del producto"><br>

                    <label for="parametro">Imagen del producto:</label>
                    <input type="text" name="imagen" id="imagen" placeholder="Precio del producto"><br>

                    <label for="option" name="option">Categoria:</label><br>
                        <select name="option" id="option">
                            <option value="Software">Software</option>
                            <option value="Diseño">Diseño</option>
                            <option value="Hatware">Hatware</option>
                        </select><br>

                        <input type="submit" name="agregar" value="AGREGAR">  
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