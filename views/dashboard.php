<?php require_once('../server/header.php'); ?>

<body>
    <div class="d-flex">

        <!--//** CONTENEDOR DEL MENU -->
        <?php require_once('../server/menu.php'); ?>

        <!-- CONTENEDOR DEL PERFIL Y FORMULARIOS -->
        <div class="d-flex flex-column w-100">
            <!-- CONTENEDOR DEL PERFIL -->
            <?php require_once('../server/profile.php'); ?>
            
            <!-- CONTENEDOR DE LOS FORMULARIOS -->
            <div>
                <h1>Formulario</h1>
            </div>
        </div>
    </div>
</body>
<?php require_once('../server/footer.php'); ?>