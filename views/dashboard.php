

<body>
    <div class="container">
        <div class="navegation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"></span>
                        <span class="title">ENDERSON GARCIA</span>
                    </a>
                </li>   
                <li>
                    <a href="perfil.html">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">PERFIL</span>
                    </a>
                </li>

                <li>
                    <a href="usuario.html">
                        <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                        <span class="title">USUARIO</span>
                    </a>
                </li>

                <li>
                    <a href="clientes.html">
                        <span class="icon"><ion-icon name="accessibility-outline"></ion-icon></span>
                        <span class="title">CLIENTE</span>
                    </a>
                </li>

                <li>
                    <a href="proveedores.html">
                        <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                        <span class="title">PROVEEDOR</span>
                    </a>
                </li>

                <li>
                    <a href="despacho.html">
                        <span class="icon"><ion-icon name="car-outline"></ion-icon></span>
                        <span class="title">DESPACHO</span>
                    </a>
                </li>

                <li>
                    <a href="productos.html">
                        <span class="icon"><ion-icon name="cube-outline"></ion-icon></span> <!-- Icono corregido -->
                        <span class="title">PRODUCTOS</span>
                    </a>
                </li>

                <li>
                    <a href="inventario.html">
                        <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></span>
                        <span class="title">INVENTARIO</span>
                    </a>
                </li>

                <li>
                    <a href="compra.html">
                        <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                        <span class="title">COMPRA</span>
                    </a>
                </li>

                <li>
                    <a href="venta.html">
                        <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
                        <span class="title">VENTA</span>
                    </a>
                </li>

                <li>
                    <a href="Formulario.html">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">CERRAR</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <!-- Icono de menú -->
                </div>
                <div class="search">
                    <!-- Barra de búsqueda -->
                </div>
                <div class="user">
                    <!-- Icono de usuario -->
                </div>
            </div>

            <h1>¡Bienvenido, <?php echo $nombre; ?>!</h1>
            <p>Has iniciado sesión correctamente.</p>
        </div>
    </div>


    <script>
        let list = document.querySelectorAll(".navegation li");

        function activeLink() {
            list.forEach((item) => {
                item.classList.remove("hovered");
            });
            this.classList.add("hovered");
        }
        list.forEach((item) => item.addEventListener("mouseover", activeLink));

        // Menú toggle
        let toggle = document.querySelector(".toggle");
        let navegation = document.querySelector(".navegation");
        let main = document.querySelector(".main");

        toggle.onclick = function () {
            navegation.classList.toggle("active");
        }
    </script>
</body>
</html>