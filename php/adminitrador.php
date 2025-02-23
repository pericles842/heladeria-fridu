<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre'])) {
    // Si no hay sesión activa, redirigir al formulario de login
    header("Location: Formulario.html");
    exit();
}

$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <style>
        * {
            font-family: 'Ubuntu', sans-serif; /* Corregido: 'Ubutu' -> 'Ubuntu' */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            overflow: hidden;
        }

        .container {
            position: relative;
            width: 100%;
        }

        .navegation {
            position: fixed;
            width: 300px;
            height: 100%;
            background: #2471A3;
            border-left: 10px solid #2471A3;
            transition: 0.5s;
            overflow: hidden;
        }

        .navegation ul {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .navegation ul li {
            position: relative;
            width: 100%;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .navegation ul li:hover,
        .navegation ul li.hovered {
            background-color: white;
        }

        .navegation ul li:nth-child(1) {
            margin-bottom: 40px;
            pointer-events: none;
        }

        .navegation ul li a {
            position: relative;
            display: block;
            width: 100%;
            display: flex;
            text-decoration: none;
            color: white;
        }

        .navegation ul li:hover a,
        .navegation ul li.hovered a {
            color: blue;
        }

        .navegation ul li a .icon {
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 75px;
            text-align: center;
        }

        .navegation ul li a .icon ion-icon {
            font-size: 1.75em;
        }

        .navegation ul li a .title {
            position: relative;
            display: block;
            padding: 0 10px;
            height: 60px;
            line-height: 60px;
            text-align: start;
            white-space: nowrap;
        }

        .navegation ul li:hover a::before,
        .navegation ul li.hovered a::before {
            content: '';
            position: absolute;
            right: 0;
            top: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px white;
            pointer-events: none;
        }

        .navegation ul li:hover a::after,
        .navegation ul li.hovered a::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px white;
            pointer-events: none;
        }

        .main {
            position: absolute;
            width: calc(100% - 300px);
            left: 300px;
            min-height: 100vh;
            background: white;
            transition: 0.5s;
        }

        .topbar {
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
        }

        .toggle {
            position: relative;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            cursor: pointer;
        }

        .search {
            position: relative;
            width: 400px;
            margin: 0 10px;
        }

        .search label {
            position: relative;
            width: 100%;
        }

        .search label input {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            padding: 5px 20px;
            padding-left: 35px;
            font-size: 18px;
            outline: none;
            border: 1px solid black;
        }

        .search label ion-icon {
            position: relative;
            top: 0;
            left: 10px;
            font-size: 1.2rem;
        }

        .user {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navegation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"></span>
                        <span class="title"><?php echo strtoupper($nombre); ?></span> <!-- Mostrar nombre del usuario -->
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
                    <a href="cerrar_sesion.php"> <!-- Enlace para cerrar sesión -->
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">CERRAR SESIÓN</span>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>