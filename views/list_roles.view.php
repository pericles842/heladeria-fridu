<div class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Lista de Cargo</h1>
  <table class="table table-hover  p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody id="rolesTbody">
      <tr>
        <th scope="row"></th>
        <td></td>
        <td>
          <button type="button" class="btn btn-danger ">Eliminar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-primary">Ver</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="rolDetail" tabindex="-1" aria-labelledby="rolDetailLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="rolDetailLabel">Detalle del permiso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-hover  p-3 mb-5 bg-white rounded">
          <thead>
            <tr>
              <th scope="col">Módulos</th>
              <th scope="col">Ver</th>
              <th scope="col">Crear</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody id="modulesTbody">

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  //funcion para ver el detalle del rol
  function viewRoleDetail(id) {
    let rol = JSON.parse(roles.find(role => role.id == id).modules);
    const tbody = document.querySelector('#modulesTbody');

    tbody.innerHTML = '';
    rol.forEach(result => {
      const row = document.createElement('tr');
      row.innerHTML = `
             <td scope="row">${result.nombre}</td>
             <td>${result.ver}</td>
             <td>${result.crear}</td>
             <td>${result.actualizar}</td>
             <td>${result.eliminar}</td>
           `;
      tbody.appendChild(row);
    });

  }
  var roles = [];
  fetch('../server/api/auth/list_roles.service.php', {
      method: 'GET',
    })
    .then(response => response.json())
    .then(data => {
      roles = data.data;

      const tbody = document.querySelector('#rolesTbody');

      tbody.innerHTML = '';
      for (let i = 0; i < data.data.length; i++) {
        const result = data.data[i];
        if (result.id == 1) continue;
        const row = document.createElement('tr');
        row.innerHTML = `
             <th scope="row">${result.id}</th>
             <td>${result.nombre}</td>
             <td>
                  <button type="button" class="btn btn-danger" onclick="eliminarUsuario(${result.id})">Eliminar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
                  <button type="button" onclick="viewRoleDetail(${result.id})" data-bs-toggle="modal" data-bs-target="#rolDetail" class="btn btn-primary">
                  Ver permisos</button>
              </td>
           `;
        tbody.appendChild(row);
      }

    });
</script>