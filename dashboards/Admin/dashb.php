                                                                                                                                                                                                                                                                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="css/minist.css">
    <title>ForgezST - DashBoard</title>
</head>
<body>

    <div class="contenedor">
        <nav>
            <img src="img/logo.png" alt="Logotipo">
            <li><a href="dashb.html">INICIO</a></li>
        <div class="produ">
            <li><a href="Class/Productos/productos.php"><i class='bx bx-cart-download' ></i> Productos</a></li>
            <li><a href="Class/Productos/productosagre.php"><i class='bx bx-shield-plus' ></i> Agregar</a></li>
            <li><a href="Class/Productos/productosdele.php"><i class='bx bx-shield-minus'></i> Eliminar</a></li>
        </div>
    
        <div class="pres">
            <li><a href="Class/Personal/personal.php"><i class='bx bx-street-view'></i> Personal</a></li>
            <li><a href="Class/Personal/personalagre.php"><i class='bx bx-shield-plus' ></i> Agregar</a></li>
            <li><a href="Class/Personal/personaldele.php"><i class='bx bx-shield-minus'></i> Eliminar</a></li>
        </div>
    
        <div class="log">
            <li><a href="auth/boardlg.html"><i class='bx bx-window-close'></i> Salir</a></li>
        </div>
    
        </nav>
      
    </div>

<div class="gra">
    <canvas id="myChart" width="100" height="100"></canvas>

    <h5>Aqui podras ver el tablero de estadisticas de visitas de tu web </h5>

</div>


<!-- SCRIPTS --->

<script src="js/scripts.js"></script>


</body>
</html>