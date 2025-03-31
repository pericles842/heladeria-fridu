<div class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Lista de Proveedor</h1>
  <table class="table table-hover  p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Compañía</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Email</th>
        <th scope="col">localization</th>
        <th scope="col">Rif</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>

<script>
  fetch('../server/api/provider/list_provider.service.php', {
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
             <td>${result.company}</td>
             <td>${result.tel}</td>
             <td>${result.email}</td>
             <td>${result.location}</td>
             <td>${result.rif}</td>
             <td>
                  <button type="button" class="btn btn-danger" onclick="eliminarUsuario(${result.id})">Eliminar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
              </td>
           `;
        tbody.appendChild(row);
      });

    });
</script>