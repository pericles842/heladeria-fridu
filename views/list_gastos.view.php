<div class="card shadow mb-4">
    <div class="card-header py-3  ">
        <h5 class="m-0 font-weight-bold text-primary">Listado de Gastos</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Proveedor</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos - deberían cargarse dinámicamente desde la base de datos -->
                    <tr>
                        <td>1</td>
                        <td>Compra de insumos</td>
                        <td>$250.00</td>
                        <td>Heladeros Venezolanos</td>
                        <td>2023-06-15</td>
                        <td>
                            <button class="btn btn-sm btn-warning mr-2">Editar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mantenimiento de equipos</td>
                        <td>$180.50</td>
                        <td>Distribuidora de Helados</td>
                        <td>2023-06-10</td>
                        <td>
                            <button class="btn btn-sm btn-warning mr-2">Editar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Fin de ejemplo -->
                </tbody>
            </table>
        </div>
    </div>
</div>