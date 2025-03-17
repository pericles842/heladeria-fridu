<?php require_once('../server/header.php'); ?>


<form class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Crear Usuario</h1>

  <div class="row">
    <div class="col-6">
      <div class="form-floating">
        <input type="text" class="form-control " name="nombre" required placeholder="Raul">
        <label for="nombre">Nombre</label>
      </div>
    </div>

    <div class="col-6 ">
      <div class="form-floating">
        <input type="text" class="form-control" name="apellido" placeholder="Martinez">
        <label for="apellido">Apellido</label>
      </div>
    </div>

  </div>

  <div class="row my-4">

    <div class="col-12 ">
      <div class="form-floating">
        <input type="email" class="form-control" name="email" required placeholder="correo@example.com">
        <label for="email">Correo Electrónico</label>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-6 ">
      <div class="form-floating">
        <input type="password" class="form-control" name="password" required>
        <label for="pass1">Contraseña</label>
      </div>
    </div>

    <div class="col-6 ">
      <div class="form-floating">
        <input type="password" class="form-control" name="password2" required>
        <label for="pass2">Confirmar Contraseña</label>
      </div>
    </div>

  </div>

  <div class="row my-4">

    <div class="col-12 ">
      <div class="form-floating">
        <select class="form-select" id="rol" name="rol_id">
          <option selected value="">Selecciona un rol</option>
          <option value="1">Administrador</option>
          <option value="2">Trabajador</option>
          <option value="3">Cliente</option>
        </select>
        <label for="rol">Rol</label>
      </div>
    </div>
  </div>


  <div class="d-flex justify-content-end gap-3" style="width: fit-content; margin-left: auto;">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
  </div>
</form>

<script>
  function refreshForm() {
    document.querySelector('form').reset();
  }

  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    //*VALIDAMOS LAS CONTRASENAS
    if (formData.get('password') != formData.get('password2')) {
      Swal.fire({
        title: "Las contraseñas no coinciden",
        icon: "error"
      });
      return;
    }

    fetch('../server/api/login/create_registro.service.php', {
      method: 'POST',
      body: formData
    }).then(data => data.json()).then(data => {
      Swal.fire({
        title: data.message,
        icon: data.success ? 'success' : 'error'
      });

      refreshForm();
    })
  })
</script>

<?php require_once('../server/footer.php'); ?>