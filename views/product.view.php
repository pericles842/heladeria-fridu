<?php require_once('../server/header.php'); ?>

<form class="">
  <h1 class="mb-5 text-primary">Agregar Productos</h1>

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
    <div class="col-6">
      <div class="form-floating">
        <input type="number" class="form-control" name="discount" required>
        <label for="discount">Categoria</label>
      </div>
    </div>

    <div class="col-6">
      <div class="form-floating">
        <input type="number" class="form-control" name="price" required>
        <label for="price">Almacén</label>
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
        <label for="discount">Proveedor</label>
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

  <label for="exampleDataList" class="form-label">Status</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Status">
    <datalist id="datalistOptions">
      <option value="Activo">
      <option value="Inactive"></option>
    </datalist>

    <label for="exampleDataList" class="form-label">Almacén</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
    <datalist id="datalistOptions">
      <option value="Azucar">
      <option value="Bolsas">
      <option value="Leche">
      <option value="Chocolate">
      <option value="Leche Condensada">
    </datalist>

    <label for="exampleDataList" class="form-label">Categoria</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
    <datalist id="datalistOptions">
      <option value="Choco Oreo">
      <option value="Fresa con Mantequedo">
      <option value="Pastelado">
    </datalist>

    <label for="exampleDataList" class="form-label">Proveedor</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
    <datalist id="datalistOptions">
      <option value="">
      <option value="">
      <option value="">
    </datalist>
  </div>

  <div class="d-flex justify-content-end gap-3 mt-4" style="width: fit-content; margin-left: auto;">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
  </div>
</form>

<script>
  getRoles();

  /**
   * Funcion para obtener los roles
   * @param {FormData} formData
   */
  function getRoles() {
    fetch('../server/api/auth/list_roles.service.php', {
      method: 'GET'
    }).then(data => data.json()).then(data => {
      const selectRole = document.getElementById('rol');
      selectRole.innerHTML = ''; // Clear existing options

      data.data.forEach(role => {
        const option = document.createElement('option');
        option.value = role.id;
        option.textContent = role.name;
        selectRole.appendChild(option);
      });
    })
  }

  

  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    formData.set('nombre', `${formData.get('nombre')} ${formData.get('apellido') || ''}`);
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

      if (data.success) refreshForm('product');
    })
  })
</script>

<?php require_once('../server/footer.php'); ?>