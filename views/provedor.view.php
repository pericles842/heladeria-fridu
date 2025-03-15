<?php require_once('../server/header.php'); ?>

<body>
  <form class="shadow rounded-3 bg-white p-5">
    <h1 class="mb-5 text-primary">Agregar Proveedor</h1>
    <div class="row ">
      <div class="col-6 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="Ej.adminitrador">
          <label for="floatingInput">Agregar Compañía</label>
        </div>
      </div>

      <div class="col-6 mb-4">
        <div class="form-floating">
          <input type="" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">Agregar Teléfono</label>
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