<div class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Lista de Productos</h1>
  <table class="table table-hover  p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Descuento</th>
        <th scope="col">Precio</th>
        <th scope="col">Estado</th>
        <th scope="col">Categoría</th>
        <th scope="col">Almacén</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>

    <tbody>
    </tbody>

  </table>
</div>

<script>
  fetch('../server/api/product/list_product.service.php', {
      method: 'GET',
    })
    .then(response => response.json())
    .then(data => {
      const tbody = document.querySelector('tbody');

      tbody.innerHTML = '';
      data.data.forEach(result => {
        const row = document.createElement('tr');
        row.innerHTML = `
             <th scope="row">${result.id}</th>
             <td>${result.name}</td>
             <td>${result.reference}</td>
             <td>${result.discount}</td>
             <td>${result.unit_price}</td>
             <td>${result.status}</td>
             <td>${result.category}</td>
             <td>${result.warehouse}</td>
             <td>
                  <button type="button" class="btn btn-danger" onclick="deleteRegistro(${result.id} ,'product')">Eliminar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
              </td>
           `;
        tbody.appendChild(row);
      });

    });
</script>