<div class="bg-primary w-100 d-flex justify-content-end  shadow rounded-1 rounded-top-0" style="padding: 7px;">

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="#" alt="" width="32" height="32" class="rounded-circle me-2">

            <div class="d-flex flex-column align-items-start ">
                <strong id="name" class="text-white">Enderson García</strong>
                <span id="role" class="text-white">Administrador</span>
            </div>
        </a>

        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">Configuración</a></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger"  href="#">Salir</a></li>
        </ul>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        let usuario = JSON.parse(sessionStorage.getItem('usuario'));
        document.getElementById('name').textContent = usuario.nombre;
        document.getElementById('role').textContent = usuario.cargo;
    });
</script>