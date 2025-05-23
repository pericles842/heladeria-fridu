<?php require_once('../server/header.php'); ?>

<body>
  <form class="">
    <h1 class="mb-5 text-primary">Agregar Proveedor</h1>

    <!-- Compañia y telefono  -->
    <div class="row ">
      <div class="col-6 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" name="company" id="floatingInput" required placeholder="Traki">
          <label for="floatingInput">Compañía</label>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="form-floating">
          <input type="number" class="form-control" name="tel" id="tel" required placeholder="0412345678" pattern="\d{10}">
          <label for="floatingInput">Teléfono</label>
        </div>
      </div>
    </div>

    <!-- correo y Rif  -->
    <div class="row ">
      <div class="col-6 mb-4">
        <div class="form-floating">
          <input type="email" class="form-control" name="email" required id="floatingInput" placeholder="jwPdM@example.com">
          <label for="floatingInput">Correo</label>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" name="rif" id="rif" required placeholder="J-12345678" pattern="^[JVEPG]{1}-\d{8}$">
          <label for="floatingInput">Rif</label>
        </div>
      </div>
    </div>

    <!-- Ubicacion  -->
    <div class="row ">
      <div class="col-12 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" name="location" id="floatingInput"
            placeholder="Venezuela - Caracas - Centro">
          <label for="floatingInput">Ubicación</label>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-end gap-3">
      <button type="button" onclick="refreshForm()" class=" btn btn-danger d-flex align-items-center gap-2">
        <i class="bi bi-trash"></i> Cancelar
      </button>
      <button type="submit" class=" btn btn-success d-flex align-items-center gap-2">
        <i class="bi bi-floppy"></i> Guardar
      </button>
    </div>
  </form>
</body>

<script>
 

  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('../server/api/provider/create_provider.service.php', {
      method: 'POST',
      body: formData

    }).then(data => data.json()).then(data => {
      Swal.fire({
        title: data.message,
        icon: data.success ? 'success' : 'error'
      });

      if (data.success) refreshForm('provider');

    })
  })
</script>
<?php require_once('../server/footer.php'); ?>