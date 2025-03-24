<div class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Listado de Usuarios</h1>
  <table class="table table-hover  p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Cargo</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
<script>
  fetch('../server/api/users/list_users.service.php', {
      method: 'GET',
    })
    .then(response => response.json())
    .then(data => {
      const tbody = document.querySelector('tbody');

      tbody.innerHTML = '';
      data.data.forEach(user => {
        const row = document.createElement('tr');
        row.innerHTML = `
             <th scope="row">${user.id}</th>
             <td>${user.nombre}</td>
             <td>${user.email}</td>
             <td>${user.cargo}</td>
             <td>
                  <button type="button" class="btn btn-danger" onclick="eliminarUsuario(${user.id})">Eliminar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
              </td>
           `;
        tbody.appendChild(row);
      });

    });
</script>