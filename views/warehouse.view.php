<?php require_once('../server/header.php'); ?>


<form class="">
  <h1 class="mb-4 text-primary">Agregar Almacén</h1>

  <div class="row">
    <div class="col-8">
      <div class="form-floating">
        <input type="text" class="form-control" name="name" required placeholder="alm-Mercedes">
        <label for="nombre">Nombre</label>
      </div>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <input type="text" class="form-control" name="code" required placeholder="193404000">
        <label for="nombre">Código</label>
      </div>
    </div>
  </div>

  <div class="row my-4">
    <div class="col-8">
      <div class="form-floating">
        <input type="text" class="form-control" name="location" required placeholder="">
        <label for="nombre">Ubicación</label>
      </div>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <select class="form-select" name="status" required>
          <option value="" selected hidden>Estatus</option>
          <option value="active">Activo</option>
          <option value="inactive">Inactivo</option>
        </select>
        <label for="nombre">Estatus</label>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-end gap-3" style="width: fit-content; margin-left: auto;">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
  </div>
</form>
<script>
  var randomNumber = Math.floor(10000 + Math.random() * 90000);
  document.querySelector('input[name="code"]').value = randomNumber;




  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('../server/api/warehouse/create_warehouse.service.php', {
      method: 'POST',
      body: formData

    }).then(data => data.json()).then(data => {
      Swal.fire({
        title: data.message,
        icon: data.success ? 'success' : 'error'
      });

      if (data.success) refreshForm('warehouse');

    })
  })
</script>
<?php require_once('../server/footer.php'); ?>