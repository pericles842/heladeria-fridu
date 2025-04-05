<?php require_once('../server/header.php'); ?>


<form class="">
  <h1 class="mb-5 text-primary">Agregar un Rol</h1>

  <div class="row mb-4">
    <div class="col-12">
      <div class="form-floating">
        <input type="text" class="form-control " name="nombre" required placeholder="">
        <label for="nombre">Nombre</label>
      </div>
    </div>
  </div>


  <div class="accordion" id="accordionExample">
    <!-- Usuario -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Usuario
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show " data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="usuarioVer" value="ver">
            <label class="form-check-label" for="usuarioVer">Ver</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="usuarioCrear" value="crear">
            <label class="form-check-label" for="usuarioCrear">Crear</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="usuarioActualizar" value="actualizar">
            <label class="form-check-label" for="usuarioActualizar">Actualizar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="usuarioEliminar" value="eliminar">
            <label class="form-check-label" for="usuarioEliminar">Eliminar</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Proveedor -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Proveedor
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
          Almacen
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
  </div>


  <div class="d-flex justify-content-end gap-3" style="width: fit-content; margin-left: auto;">
    <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
  </div>
</form>

<?php require_once('../server/footer.php'); ?>