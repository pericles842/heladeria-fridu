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
      <button type="button" onclick="refreshForm()" class="btn btn-danger d-flex align-items-center gap-2">Cancelar</button>
      <button type="submit" class="btn btn-success d-flex align-items-center gap-2">Guardar</button>
    </div>
  </form>
</body>
<script>
  function refreshForm() {
    document.querySelector('form').reset();
  }

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

      if (data.success) refreshForm();

    })
  })
</script>
<?php require_once('../server/footer.php'); ?>