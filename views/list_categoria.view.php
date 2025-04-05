<div class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Lista de Categoría</h1>
  <table class="table table-hover  p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
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
  fetch('../server/api/category/list_category.service.php', {
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
             <td>
                  <button type="button" class="btn btn-danger" onclick="eliminarUsuario(${result.id})">Eliminar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
              </td>
           `;
        tbody.appendChild(row);
      });

    });
</script>