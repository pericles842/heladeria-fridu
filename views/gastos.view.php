<div class="  mt-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Registro de Gastos</h5>
        </div>
        <div class="card-body">
            <form id="formGastos">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="concepto" class="font-weight-bold">Concepto</label>
                        <input type="text" class="form-control" id="concepto" name="concepto" required>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label for="monto" class="font-weight-bold">Monto</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" step="0.01" class="form-control" id="monto" name="monto" required>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="proveedor" class="font-weight-bold">Proveedor</label>
                        <select class="form-control" id="proveedor" name="proveedor" required>
                            <option value="">Seleccionar proveedor...</option>
                            <option value="1">Heladeros Venezolanos</option>
                            <option value="2">Distribuidora de Helados</option>
                            <!-- Estos datos deberían cargarse dinámicamente desde la base de datos -->
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="fecha" class="font-weight-bold">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Registrar Gasto</button>
            </form>
        </div>
    </div>
</div>