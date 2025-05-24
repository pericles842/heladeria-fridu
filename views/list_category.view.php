<div class="shadow rounded-3 bg-white p-5">
  <h1 class="mb-5 text-primary">Lista de Categoría</h1>

  <div class="mb-3">
    <input type="text" id="categorySearchInput" class="form-control" placeholder="Buscar categoría por nombre..." onkeyup="filterCategories()">
  </div>

  <table class="table table-hover p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody id="categoryTableBody">
      </tbody>
  </table>

  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center" id="paginationControls">
      </ul>
  </nav>
</div>

<script>
  let allCategories = []; // Stores all categories fetched from the server
  let filteredCategories = []; // Stores categories after applying search filter
  const itemsPerPage = 6; // Number of items to display per page
  let currentPage = 1; // Current active page

  // Function to fetch and render categories
  function fetchAndRenderCategories() {
    fetch('../server/api/category/list_category.service.php', {
        method: 'GET',
      })
      .then(response => response.json())
      .then(data => {
        allCategories = data.data; // Store all fetched data
        filteredCategories = [...allCategories]; // Initially, filtered categories are all categories
        renderPage(currentPage); // Render the first page
        renderPaginationControls(); // Render pagination buttons
      })
      .catch(error => console.error('Error fetching categories:', error));
  }

  // Function to render categories for the current page
  function renderPage(page) {
    currentPage = page;
    const tbody = document.getElementById('categoryTableBody');
    tbody.innerHTML = ''; // Clear existing rows

    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const categoriesToDisplay = filteredCategories.slice(startIndex, endIndex);

    if (categoriesToDisplay && categoriesToDisplay.length > 0) {
      categoriesToDisplay.forEach(result => {
        let jsonResult = encodeURIComponent(JSON.stringify(result));
        const row = document.createElement('tr');
        row.innerHTML = `
          <th scope="row">${result.id}</th>
          <td>${result.name}</td>
          <td>
              <button type="button" class="btn btn-danger" onclick="deleteRegistro(${result.id} ,'category')">Eliminar</button>
              <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                  type="button" onclick="renderingTemplate('category', 'formulario-modal',
                  JSON.parse(decodeURIComponent('${jsonResult}')))"
                  class="btn btn-primary">Editar</button>
          </td>
        `;
        tbody.appendChild(row);
      });
    } else {
      tbody.innerHTML = '<tr><td colspan="3" class="text-center">No se encontraron categorías.</td></tr>';
    }
  }

  // Function to render pagination controls
  function renderPaginationControls() {
    const paginationControls = document.getElementById('paginationControls');
    paginationControls.innerHTML = ''; // Clear existing controls

    const totalPages = Math.ceil(filteredCategories.length / itemsPerPage);

    // Previous button
    const prevClass = currentPage === 1 ? 'disabled' : '';
    paginationControls.innerHTML += `
      <li class="page-item ${prevClass}">
        <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Anterior</a>
      </li>
    `;

    // Page number buttons
    for (let i = 1; i <= totalPages; i++) {
      const activeClass = i === currentPage ? 'active' : '';
      paginationControls.innerHTML += `
        <li class="page-item ${activeClass}">
          <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
        </li>
      `;
    }

    // Next button
    const nextClass = currentPage === totalPages ? 'disabled' : '';
    paginationControls.innerHTML += `
      <li class="page-item ${nextClass}">
        <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Siguiente</a>
      </li>
    `;
  }

  // Function to change page
  function changePage(page) {
    if (page >= 1 && page <= Math.ceil(filteredCategories.length / itemsPerPage)) {
      renderPage(page);
      renderPaginationControls(); // Re-render pagination controls to update active state
    }
  }

  // Function to filter categories based on search input
  function filterCategories() {
    const searchInput = document.getElementById('categorySearchInput');
    const searchTerm = searchInput.value.toLowerCase();

    filteredCategories = allCategories.filter(category =>
      category.name.toLowerCase().includes(searchTerm)
    );
    currentPage = 1; // Reset to first page after filtering
    renderPage(currentPage);
    renderPaginationControls();
  }

  // Initial load of categories when the script runs
  document.addEventListener('DOMContentLoaded', fetchAndRenderCategories);

  // Add event listener for custom event to refresh the list (for saving/editing)
  document.addEventListener('categoryAddedOrUpdated', function() {
    fetchAndRenderCategories();
  });
</script>