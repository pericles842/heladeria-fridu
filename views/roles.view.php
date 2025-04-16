<?php require_once('../server/header.php'); ?>


<form class="">
  <h1 class="mb-5 text-primary">Agregar un Rol</h1>

  <div class="row ">
    <div class="col-12">
      <div class="form-floating">
        <input type="text" class="form-control " name="nombre" required placeholder="">
        <label for="nombre">Nombre</label>
      </div>
    </div>
  </div>


  <div class="accordion my-4" id="accordionExample">

    <!-- rol -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Roles
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show " data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="rolVer" value="ver">
            <label class="form-check-label" for="rolVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="rolCrear" value="crear">
            <label class="form-check-label" for="rolCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="rolActualizar" value="actualizar">
            <label class="form-check-label" for="rolActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="rolEliminar" value="eliminar">
            <label class="form-check-label" for="rolEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>


    <!-- usuarios -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRoles" aria-expanded="false" aria-controls="collapseRol">
          Usuarios
        </button>
      </h2>
      <div id="collapseRoles" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="usuariosVer" value="ver">
            <label class="form-check-label" for="usuariosVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="usuariosCrear" value="crear">
            <label class="form-check-label" for="usuariosCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="usuariosActualizar" value="actualizar">
            <label class="form-check-label" for="usuariosActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="usuariosEliminar" value="eliminar">
            <label class="form-check-label" for="usuariosEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Proveedor -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Proveedores
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="proveedorVer" value="ver">
            <label class="form-check-label" for="proveedorVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="proveedorCrear" value="crear">
            <label class="form-check-label" for="proveedorCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="proveedorActualizar" value="actualizar">
            <label class="form-check-label" for="proveedorActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="proveedorEliminar" value="eliminar">
            <label class="form-check-label" for="proveedorEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Almacen -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Almacenes
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="almacenVer" value="ver">
            <label class="form-check-label" for="almacenVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="almacenCrear" value="crear">
            <label class="form-check-label" for="almacenCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="almacenActualizar" value="actualizar">
            <label class="form-check-label" for="almacenActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="almacenEliminar" value="eliminar">
            <label class="form-check-label" for="almacenEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Productos -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Productos
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="productosVer" value="ver">
            <label class="form-check-label" for="productosVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="productosCrear" value="crear">
            <label class="form-check-label" for="productosCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="productosActualizar" value="actualizar">
            <label class="form-check-label" for="productosActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="productosEliminar" value="eliminar">
            <label class="form-check-label" for="productosEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Categoria -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Categoria
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="categoriaVer" value="ver">
            <label class="form-check-label" for="categoriaVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="categoriaCrear" value="crear">
            <label class="form-check-label" for="categoriaCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="categoriaActualizar" value="actualizar">
            <label class="form-check-label" for="categoriaActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="categoriaEliminar" value="eliminar">
            <label class="form-check-label" for="categoriaEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Inventario -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Inventario
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inventarioVer" value="ver">
            <label class="form-check-label" for="inventarioVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inventarioCrear" value="crear">
            <label class="form-check-label" for="inventarioCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inventarioActualizar" value="actualizar">
            <label class="form-check-label" for="inventarioActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inventarioEliminar" value="eliminar">
            <label class="form-check-label" for="inventarioEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Despacho -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Despacho
        </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="despachoVer" value="ver">
            <label class="form-check-label" for="despachoVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="despachoCrear" value="crear">
            <label class="form-check-label" for="despachoCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="despachoActualizar" value="actualizar">
            <label class="form-check-label" for="despachoActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="despachoEliminar" value="eliminar">
            <label class="form-check-label" for="despachoEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>


    <!-- Reportes -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReport" aria-expanded="false" aria-controls="collapseReport">
          Reportes
        </button>
      </h2>
      <div id="collapseReport" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ReportesVer" value="ver">
            <label class="form-check-label" for="ReportesVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ReportesCrear" value="crear">
            <label class="form-check-label" for="ReportesCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ReportesActualizar" value="actualizar">
            <label class="form-check-label" for="ReportesActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ReportesEliminar" value="eliminar">
            <label class="form-check-label" for="ReportesEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>


    <!-- Gastos -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExpenses" aria-expanded="false" aria-controls="collapseExpenses">
          Gastos
        </button>
      </h2>
      <div id="collapseExpenses" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="GastosVer" value="ver">
            <label class="form-check-label" for="GastosVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="GastosCrear" value="crear">
            <label class="form-check-label" for="GastosCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="GastosActualizar" value="actualizar">
            <label class="form-check-label" for="GastosActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="GastosEliminar" value="eliminar">
            <label class="form-check-label" for="GastosEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Pagos -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePayments" aria-expanded="false" aria-controls="collapsePayments">
          Pagos
        </button>
      </h2>
      <div id="collapsePayments" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="PagosVer" value="ver">
            <label class="form-check-label" for="PagosVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="PagosCrear" value="crear">
            <label class="form-check-label" for="PagosCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="PagosActualizar" value="actualizar">
            <label class="form-check-label" for="PagosActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="PagosEliminar" value="eliminar">
            <label class="form-check-label" for="PagosEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="d-flex justify-content-end gap-3" style="width: fit-content; margin-left: auto;">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
  </div>
</form>

<script>
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();


    //divs con la clase accordion-item
    const accordion_items = document.querySelectorAll('.accordion-item');
    const modulesArray = [];

    accordion_items.forEach((accordion_item, index) => {

      // Nombre del módulo según la clase accordion-button
      const key = accordion_item.querySelector('.accordion-button').textContent.trim().toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "");
      const nombre = key.charAt(0).toUpperCase() + key.slice(1); // Primera letra mayúscula

      const permissions = {
        id: index + 1,
        key: key,
        nombre: nombre,
        ver: false,
        crear: false,
        actualizar: false,
        eliminar: false
      };

      // Recorrer checkboxes y actualizar los permisos
      accordion_item.querySelectorAll('input[type="checkbox"]').forEach(input => {
        const permiso = input.value.trim().toLowerCase(); // ver, crear, etc.

        if (['ver', 'crear', 'actualizar', 'eliminar'].includes(permiso))
          permissions[permiso] = input.checked;
      });

      modulesArray.push(permissions);
    });


    let formData = new FormData(this);
    formData.append('modules', JSON.stringify(modulesArray));

    fetch('../server/api/auth/create_role.service.php', {
      method: 'POST',
      body: formData
    }).then(response => response.json()).then(response => {

      Swal.fire({
        title: response.message,
        icon: response.success ? 'success' : 'error'
      });

      if (response.success) refreshForm('roles');
    })
  })
</script>
<?php require_once('../server/footer.php'); ?>