<?php require_once('../server/header.php'); ?>

<body>
  <form class="">
    <h1 class="mb-5 text-primary">Agregar Categoría</h1>
    <div class="row ">
      <div class="col-12 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="Ej.adminitrador">
          <label for="floatingInput">Agregar Nombre</label>
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