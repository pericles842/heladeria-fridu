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
        <label for="serial">Numero del Serial</label>
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
        <input type="text" class="form-control" name="discount" required>
        <label for="discount">Descuento</label>
      </div>
    </div>
  </div>

    <div class="col-6">
      <div class="form-floating">
        <input type="" class="form-control" name="" required>
        <label for="price">Precio Unitario</label>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-6">
      <div class="form-floating">
        <input type="text" class="form-control" name="discount" required>
        <label for="discount">Estado</label>
      </div>
    </div>

    <label for="exampleDataList" class="form-label">Almacén</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
    <datalist id="datalistOptions">
      <option value="Arequipe">
      <option value="Azúcar">
      <option value="Barquilla Sugar">
      <option value="Barquillon(17CM)">
      <option value="Barquillon(13CM)">
      <option value="Bolsas de Barquillon">
    </datalist>

    <label for="exampleDataList" class="form-label">Categoria</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
    <datalist id="datalistOptions">
      <option value="Mantecado - Choco">
      <option value="Choco-Oreo">
      <option value="Fresa">
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