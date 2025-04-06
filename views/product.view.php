<?php require_once('../server/header.php'); ?>

<form class="">
  <h1 class="mb-5 text-primary">Agregar Producto</h1>

  <div class="row mb-4">
    <div class="col-6">
      <div class="form-floating">
        <input type="name" class="form-control" name="name" required>
        <label for="nombre">Nombre</label>
      </div>
    </div>

    <div class="col-6">
      <div class="form-floating">
        <input type="text" class="form-control" name="serial" required>
        <label for="serial">Serial</label>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-12">
      <div class="form-floating">
        <input type="text" class="form-control" name="description" required placeholder="">
        <label for="description">Descripción</label>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-6">
      <div class="form-floating">
        <input type="number" class="form-control" name="discount" required>
        <label for="discount">Descuento</label>
      </div>
    </div>

    <div class="col-6">
      <div class="form-floating">
        <input type="number" class="form-control" name="price" required>
        <label for="price">Precio</label>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-12">
      <select class="form-select form-select-lg" name="status" aria-label="Status selection">
        <option selected>Estatus</option>
        <option value="1">Categoria</option>
        <option value="2">Almacén</option>
        <option value="3">Proveedor</option>
      </select>
    </div>
  </div>

  <div class="d-flex justify-content-end gap-3 mt-4" style="width: fit-content; margin-left: auto;">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
  </div>
</form>


<?php require_once('../server/footer.php'); ?>