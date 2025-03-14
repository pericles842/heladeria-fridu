<?php require_once('../server/header.php'); ?>

<body>
    <div class="form-container main-position">

        <form method="Post" id="Formulario" class="Formulario" action="../server/api/auth/authentication.php" onsubmit="returnvalidateForm()">

            <h2 class="text-center">LOGIN</h2>
            <div>
                <label for="nombre"></label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required />
            </div>

            <div class="my-3">
                <label for="contraseña"></label>
                <input type="password" id="Contraseña" name="contraseña" placeholder="Contraseña" required />
            </div>

            <button class="primary-button" type="submit">Iniciar Session</button>

            <div class="d-flex gap-2 justify-content-between">
                <a class="links">Olvidaste la Contraseña</a>
                <a class="links" href="../index.php">Volver</a>
            </div>

        </form>

    </div>
    <script>
        function validateForm() {
            const nombre = document.getElementId('nombre').value;
            const contraseña = document.getElementId('contraseña').value;
        }

        //validación del nombre

        if (nombre.trim() === '') {
            alert('Por favor ingresa tu nombre.');
            return false;
        }

        //validación de la contraseña

        const contraseñaPatterm = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (contraseñaPattern.test(contraseña)) {
            alert('Por favor, ingresa tu contraseña.');
            return false;
        }

        //permitir el envio del formulario

        return true;
    </script>
</body>