<?php require_once('../server/header.php'); ?>

<body>
  <form class="shadow rounded-3 bg-white p-5">
    <h1 class="mb-5 text-primary">Agregar Categoría</h1>
    <div class="row ">
      <div class="col-12 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="Ej.adminitrador">
          <label for="floatingInput">Agregar Nombre</label>
        </div>
      </div>

      <div class="col d-flex align-items-center gap-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="crear">
          <label class="form-check-label" for="crear">
            Crear
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="editar">
          <label class="form-check-label" for="editar">
            Editar
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="eliminar">
          <label class="form-check-label" for="eliminar">
            Eliminar
          </label>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-end gap-3">
      <button type="button" class=" btn btn-danger d-flex align-items-center gap-2">
        <i class="bi bi-trash"></i> Cancelar
      </button>
      <button type="button" class=" btn btn-success d-flex align-items-center gap-2">
        <i class="bi bi-floppy"></i> Guardar
      </button>
    </div>
  </form>
</body>
<?php require_once('../server/footer.php'); ?>