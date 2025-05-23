<form class="needs-validation" novalidate>
  <h1 class="mb-5 text-primary">Agregar Pagos</h1>

  <div class="row mb-3">
    <div class="col-md-6">
      <div class="form-floating">
        <input type="text" class="form-control" id="cliente" name="cliente">
        <label for="monto">Cliente</label>
        <div class="invalid-feedback">
          Por favor ingrese un cliente válido
        </div>
      </div>
    </div>

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
          <input type="text" class="form-control" id="cantidad" name="cantidad">
          <label for="description">Cantidad de Producto</label>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="form-floating">
        <input type="number" class="form-control" id="numero" name="numero">
        <label for="number">Número de Referencia</label>
      </div>
    </div>
  </div>

      <div class="col-4 ">
      <div class="form-floating">
        <input type="date" class="form-control" id="" placeholder="">
        <label for="">Fecha</label>
      </div>
    </div>
</form>