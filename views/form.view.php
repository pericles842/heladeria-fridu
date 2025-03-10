<?php require_once('../server/header.php'); ?>
<link rel="stylesheet" type="text/css" href="../assets/styles/roles.css">
<body>
    <div class="ring">
        <i style="--clr:#00ff0a"></i>
        <i style="--clr:#ff0057"></i>
        <i style="--clr:#fffd44"></i>
        <div class="login">
            <h2>Roles</h2>
            <div class="inputBx">
                <input type="text" placeholder="Nombre y Apellido">
            </div>
            <div class="inputBx">
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBx">
                <input type="password" placeholder="password">
            </div>
            <div class="inputBx">
                <input type="password" placeholder="conformation password">
            </div>


            <div class="dropdown w-100 inputBx">
                <button class="btn bg-background-gradient text-white dropdown-toggle rounded-5 w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Roles
                </button>
                <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button">Administrador</button></li>
                    <li><button class="dropdown-item" type="button"></button></li>
                    <li><button class="dropdown-item" type="button"></button></li>
                </ul>
            </div>
            <div class="inputBx">
                <input type="submit" value="Registrar">
            </div>
            <!-- Boton de olvidar contraseña y ya tienes cuenta-->
            <div class="links">
                <a href="">Olvidaste la contraseña</a>
                <a href="">¿Ya tienes cuenta?</a>
            </div>
        </div>
    </div>
</body>
<?php require_once('../server/footer.php'); ?>