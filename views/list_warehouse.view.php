<div class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Lista de Almacén</h1>
  <table class="table table-hover  p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ubicación</th>
        <th scope="col">Estado</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <button type="button" class="btn btn-primary">Eliminar</button>
          <button type="button" class="btn btn-warning">Guardar</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<script>
  fetch('../server/api/warehouse/list_warehouse.service.php', {
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
             <td>${result.code}</td>
             <td>${result.location}</td>
             <td>${result.status}</td>
             <td>
                  <button type="button" class="btn btn-danger" onclick="deleteRegistro(${result.id}, 'warehouse')">Eliminar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
              </td>
           `;
        tbody.appendChild(row);
      });

    });
</script>