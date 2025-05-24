<?php require_once('../server/header.php'); ?>

<body>
  <form class="">
    <h1 class="mb-5 text-primary">Agregar Categoría</h1>
    <div class="row ">
      <div class="col-12 mb-4">
        <div class="form-floating">
          <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Ej.adminitrador">
          <label for="floatingInput">Nombre</label>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-end gap-3" style="width: fit-content; margin-left: auto;">
      <button type="button" class="btn btn-danger d-flex align-items-center gap-2" data-bs-dismiss="modal">Cancelar</button>
      <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
    </div>
  </form>
</body>
<script>
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('../server/api/category/create_category.service.php', {
      method: 'POST',
      body: formData

    }).then(data => data.json()).then(data => {
      Swal.fire({
        title: data.message,
        icon: data.success ? 'success' : 'error'
      });

      if (data.success) {
        // Dispatch a custom event to signal list_category.view.php to refresh
        window.parent.document.dispatchEvent(new Event('categoryAddedOrUpdated'));
        // Close the modal if it's open (assuming it's in a Bootstrap modal)
        window.parent.$('#exampleModal').modal('hide');
      }
    })
  })
</script>
<?php require_once('../server/footer.php'); ?>