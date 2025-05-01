<form class="needs-validation" novalidate>
  <h1 class="mb-5 text-primary">Agregar Gastos</h1>

  <div class="row mb-3">
    <div class="col-md-6">
      <div class="form-floating">
        <input type="number" class="form-control" id="monto" name="monto" required placeholder="0.00" step="0.01" min="0">
        <label for="monto">Monto*</label>
        <div class="invalid-feedback">
          Por favor ingrese un monto válido
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-floating">
        <input type="text" class="form-control" id="description" name="description" placeholder="Descripción del gasto">
        <label for="description">Descripción</label>
      </div>
    </div>
  </div>


  <div class="mb-3">
    <div class="form-floating">
      <select class="form-select" id="proveedor" name="proveedor" required>

      </select>

      <label for="proveedor">Proveedor*</label>
      <div class="invalid-feedback">
        Por favor seleccione un proveedor
      </div>
    </div>
  </div>

  <div class="mb-3">
    <div class="form-floating">
      <input type="date" class="form-control" id="fecha" name="fecha" required>
      <label for="fecha">Fecha del gasto</label>
      <div class="invalid-feedback">
        Por favor seleccione una fecha
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-end gap-3 mt-4">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">
      <i class="bi bi-x-circle"></i> Cancelar
    </button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">
      <i class="bi bi-save"></i> Guardar
    </button>
  </div>
</form>
<script>
  document.getElementById('fecha').value = new Date().toISOString().split('T')[0]
  getProvider()

  function getProvider() {
    fetch('../server/api/provider/list_provider.service.php', {
      method: 'GET'
    }).then(data => data.json()).then(data => {
      const selectRole = document.getElementById('proveedor');
      selectRole.innerHTML = ''; // Clear existing options

      for (const provider of data.data) {

        const option = document.createElement('option');
        option.value = provider.id;
        option.textContent = provider.company;
        selectRole.appendChild(option);
      }
    })
  }


  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('../server/api/gasto/create_gasto.service.php', {
      method: 'POST',
      body: formData
    }).then(data => data.json()).then(data => {
      Swal.fire({
        title: data.message,
        icon: data.success ? 'success' : 'error'
      });


      if (data.success) refreshForm('gasto');
    })
  })
</script>