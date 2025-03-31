<?php require_once('../server/header.php'); ?>


<form class="">
  <h1 class="mb-5 text-primary">Crear Despacho</h1>

  <div class="row">
    <div class="col-6">
      <div class="form-outline">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>Seleccione una venta</option>
          <option value="1">Calle 12 #23-45 - 15/12/2022</option>
          <option value="2">Calle 18 #45-67 - 16/12/2022</option>
          <option value="3">Calle 3 #12-45 - 17/12/2022</option>
          <option value="4">Calle 5 #67-89 - 18/12/2022</option>
          <option value="5">Calle 10 #89-12 - 19/12/2022</option>
        </select>

      </div>
    </div>

    <div class="col-6">
      <div class="form-outline">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>Seleccione un estatus</option>
          <option value="1">Pendiente</option>
          <option value="2">En transito</option>
          <option value="3">Entregado</option>
          <option value="4">Cancelado</option>
        </select>
      </div>
    </div>
  </div>

  <!-- SEGUNDA FILA -->
  <div class="row my-3">
    <div class="col-4 ">
      <div class="form-floating">
        <input type="date" class="form-control" id="" placeholder="">
        <label for="">Fecha Salida</label>
      </div>
    </div>


    <div class="col-4 ">
      <div class="form-floating">
        <input type="date" class="form-control" id="" placeholder="">
        <label for="">Fecha Entrega</label>
      </div>
    </div>

    <div class="col-4 ">
      <div class="form-floating">
        <input type="text" class="form-control" id="" placeholder="" />
        <label for="">Codigo de Despacho</label>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 ">
      <div class="form-floating">
        <textarea class="form-control" id="" placeholder=""></textarea>
        <label for="">Dirección</label>
      </div>
    </div>
  </div>


  <div class="d-flex justify-content-end gap-3 mt-4">
    <button type="button" class="btn btn-danger d-flex align-items-center gap-2">
      <i class="bi bi-trash"></i> Cancelar
    </button>
    <button type="submit" class="btn btn-success d-flex align-items-center gap-2">
      <i class="bi bi-floppy"></i> Guardar
    </button>
  </div>
</form>
</div>



<?php require_once('../server/footer.php'); ?>