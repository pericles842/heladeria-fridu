<?php require_once('../server/header.php'); ?>


<form class="">
  <h1 class="mb-5 text-primary">Agregar un Rol</h1>

  <div class="row">
    <div class="col-6">
      <div class="form-floating">
        <input type="text" class="form-control " name="nombre" required placeholder="">
        <label for="nombre">Nombre</label>
      </div>
    </div>

    <div class="col-6 ">
      <div class="form-floating">
        <input type="text" class="form-control" name="apellido" placeholder="">
        <label for="apellido">Apellido</label>
      </div>
    </div>
  </div>

  <div class="row my-4">
    <div class="col-12 ">
      <div class="form-floating">
        <select class="form-select" id="rol" name="rol_id">
        </select>
        <label for="permisos">Permisos</label>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-end gap-3" style="width: fit-content; margin-left: auto;">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
  </div>
</form>

<?php require_once('../server/footer.php'); ?>
