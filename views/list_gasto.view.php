<div class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Lista de Gastos</h1>
  <table class="table table-hover  p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Monto</th>
        <th scope="col">Concepto</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Fecha</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>

      </tr>
    </tbody>
  </table>
</div>


<script>
  fetch('../server/api/gasto/list_gasto.service.php', {
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
            <td>${result.total_amount}</td>
            <td>${result.description}</td>
            <td>${result.company}</td>
            <td>${result.created_at}</td>
             <td>
                  <button type="button" class="btn btn-danger" onclick="deleteRegistro(${result.id} ,'gasto')">Eliminar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
              </td>
           `;
        tbody.appendChild(row);
      });

    });
</script>