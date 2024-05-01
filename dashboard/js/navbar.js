function createNavbar() {
    const navbar = document.createElement('nav');
    navbar.innerHTML = `
    <div class="contenedor">
        <nav>
        <style src="/css/minist.css"></style>
            <img src="../../img/logo.png" alt="Logotipo">
            <ul>
                <li><a href="../../dashb.html">INICIO</a></li>

                <div class="produ">
                <li><a href="productos.html"><i class='bx bx-cart-download' ></i> Productos</a></li>
                <li><a href="productosagre.html"><i class='bx bx-shield-plus' ></i> Agregar</a></li>
                <li><a href="productosdele.html"><i class='bx bx-shield-minus'></i> Eliminar</a></li>
            </div>
        
            <div class="pres">
                <li><a href=""><i class='bx bx-street-view'></i> Personal</a></li>
                <li><a href=""><i class='bx bx-shield-plus' ></i> Agregar</a></li>
                <li><a href=""><i class='bx bx-shield-minus'></i> Eliminar</a></li>
            </div>
        
            <div class="log">
                <li><a href="auth/boardlg.html"><i class='bx bx-window-close'></i> Salir</a></li>
            </div>
            </ul>
        </nav>
    </div>
    `;
    return navbar;
}
