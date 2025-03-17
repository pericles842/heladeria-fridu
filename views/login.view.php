<?php require_once('../server/header.php'); ?>

<body>
  <div class="form-container main-position">

    <form method="Post" id="Formulario" class="Formulario">

      <h2 class="text-center">LOGIN</h2>
      <div>
        <label for="email"></label>
        <input type="text" id="email" name="email" placeholder="cliente@gmail.com" required />
      </div>

      <div class="my-3">
        <label for="contraseña"></label>
        <input type="password" id="Contraseña" name="password" placeholder="Contraseña" required />
      </div>

      <button class="primary-button" type="submit">Iniciar Session</button>

      <div class="d-flex gap-2 justify-content-between">
        <a class="links">Olvidaste la Contraseña</a>
        <a class="links" href="../index.php">Volver</a>
      </div>

    </form>

  </div>

  <script>
    document.querySelector('form').addEventListener('submit', function(event) {
      event.preventDefault();

      const formData = new FormData(this);
      fetch('../server/api/auth/authentication.service.php', {
        method: this.method,
        body: formData

      }).then(data => data.json()).then(data => {
        Swal.fire({
          title: data.message,
          icon: data.success ? 'success' : 'error'
        });

        if (data.success) {

          //GUARDAMOS LA SESSION EN EL LOCAL ESTORAGE
          sessionStorage.setItem('usuario', JSON.stringify(data.data));
          sessionStorage.setItem('is_logged', true);


          setTimeout(() => {
            if (data.data.rol_id != 3) {
              window.location.href = './dashboard.view.php';
            } else {
              window.location.href = '../index.php';
            }
          }, 2300);
        }
      }).catch(err => {
        console.log(err);
      });
    })
  </script>
</body>

<?php require_once('../server/footer.php'); ?>