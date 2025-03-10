<?php require_once('../server/header.php'); ?>


  <form class="shadow rounded-3 bg-white p-5">
    <h1 class="mb-5 text-primary">Crear Usuario</h1>

    <div class="row">
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control " id="nombre" placeholder="Raul">
          <label for="nombre">Nombre</label>
        </div>
      </div>

      <div class="col-6 ">
        <div class="form-floating">
          <input type="text" class="form-control" id="apellido" placeholder="Martinez">
          <label for="apellido">Apellido</label>
        </div>
      </div>

    </div>

    <div class="row my-4">

      <div class="col-12 ">
        <div class="form-floating">
          <input type="email" class="form-control" id="email" placeholder="correo@example.com">
          <label for="email">Correo Electrónico</label>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-6 ">
        <div class="form-floating">
          <input type="password" class="form-control" id="pass1" placeholder="••••••••">
          <label for="pass1">Contraseña</label>
        </div>
      </div>

      <div class="col-6 ">
        <div class="form-floating">
          <input type="password" class="form-control" id="pass2" placeholder="••••••••">
          <label for="pass2">Confirmar Contraseña</label>
        </div>
      </div>

    </div>

    <div class="row my-4">

      <div class="col-12 ">
        <div class="form-floating">
          <select class="form-select" id="rol">
            <option selected>Selecciona un rol</option>
            <option value="admin">Administrador</option>
            <option value="editor">Editor</option>
            <option value="usuario">Usuario</option>
          </select>
          <label for="rol">Rol</label>
        </div>
      </div>
    </div>
    

    <div class="d-flex justify-content-end gap-3">
      <button type="button" class="btn btn-danger d-flex align-items-center gap-2">
        <i class="bi bi-trash"></i> Cancelar
      </button>
      <button type="submit" class="btn btn-success d-flex align-items-center gap-2">
        <i class="bi bi-floppy"></i> Guardar
      </button>
    </div>
  </form>


<?php require_once('../server/footer.php'); ?>