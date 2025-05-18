<?php require_once('../server/header.php'); ?>

<form>
  <h1 class="mb-5 text-primary">Agregar Productos</h1>

  <div class="row mb-4">
    <div class="col-6">
      <div class="form-floating">
        <input type="name" class="form-control" name="name" required>
        <label for="name">Nombre</label>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-6">
      <select class="form-select" aria-label="Default select example">
        <option selected>Descuento</option>
        <option value="1">0%</option>
        <option value="2">5%</option>
        <option value="3">10%</option>
        <option value="4">15%</option>
        <option value="5">20%</option>
      </select>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-6">
      <div class="form-floating">
        <input type="" class="form-control" name="unit_price" required>
        <label for="unit_price">Precio Unitario (Bs)</label>
      </div>
    </div>

    <div class="col-3">
      <div class="form-floating">
        <input type="number" class="form-control" name="stock" required>
        <label>Minimo</label>
      </div>
    </div>

    <div class="col-3">
      <div class="form-floating">
        <input type="number" class="form-control" name="stock" required>
        <label>Maximo</label>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-4">
      <div class="form-floating">
        <select class="form-select" id="estado" name="status">
          <option value="available">Activo</option>
          <option value="sold">Agotado</option>
        </select>
        <label for="status">Estatus</label>
      </div>
    </div>

    <div class="col-4">
      <div class="form-floating">
        <select class="form-select" id="almacen" name="warehouse_id">
        </select>
        <label for="almacen">Almacén</label>
      </div>
    </div>

    <div class="col-4">
      <div class="form-floating">
        <select class="form-select" id="categoria" name="category_id">
        </select>
        <label for="categoria">Categoría</label>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-12">
      <div class="form-floating">
        <input type="text" class="form-control" name="description" required>
        <label for="description">Descripción</label>
      </div>
    </div>
  </div>


  <div class="d-flex justify-content-end gap-3 mt-4" style="width: fit-content; margin-left: auto;">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
  </div>
</form>

<script>
  getResources();

  /**
   * Funcion para obtener los recursos del formulario
   * 
   */
  function getResources() {
    Promise.all([
      fetch('../server/api/warehouse/list_warehouse.service.php'),
      fetch('../server/api/category/list_category.service.php')
    ]).then(responses => Promise.all(responses.map(response => response.json()))).then(data => {


      const warehouses = data[0].data;
      const categories = data[1].data;

      //obnteners el select
      const warehouseSelect = document.getElementById('almacen');
      const categorySelect = document.getElementById('categoria');

      //limpiamos el select si tiene algo
      warehouseSelect.innerHTML = '';
      categorySelect.innerHTML = '';

      //iteramos almacenes y creamos las etiquetas options
      for (const warehouse of warehouses) {

        if (warehouse.status != 'active') continue;
        const option = document.createElement('option');
        option.value = warehouse.id;
        option.textContent = warehouse.name;
        warehouseSelect.appendChild(option);
      }

      categories.forEach(category => {
        const option = document.createElement('option');
        option.value = category.id;
        option.textContent = category.name;
        categorySelect.appendChild(option);
      });
    })
  }



  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('../server/api/product/create_product.service.php', {
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