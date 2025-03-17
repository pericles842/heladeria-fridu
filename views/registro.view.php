<?php require_once('../server/header.php'); ?>
<link rel="stylesheet" type="text/css" href="../assets/styles/roles.css">

<body>
  <form>
    <div class="ring">
      <i style="--clr:#00ff0a"></i>
      <i style="--clr:#ff0057"></i>
      <i style="--clr:#fffd44"></i>
      <div class="login">
        <h2>Registro</h2>
        <div class="inputBx">
          <input type="text" name="nombre" required placeholder="Nombre y Apellido">
        </div>
        <div class="inputBx">
          <input type="email" name="email" required placeholder="Email">
        </div>
        <div class="inputBx">
          <input type="password" name="password" required placeholder="Contraseña">
        </div>

        <div class="inputBx">
          <input type="password" name="password2" required placeholder="Confirmar Contraseña">
        </div>

        <div class="inputBx">
          <input type="submit" value="Enviar">
        </div>

        <div class="links">
          <a href="">Olvidaste la contraseña</a>
          <a href="">¿Ya tienes cuenta?</a>
        </div>
      </div>
    </div>
  </form>
</body>

<script>
  document.querySelector('form').addEventListener('submit', function(event) {

    event.preventDefault(); // Evita el comportamiento predeterminado del formulario

    const formulario = new FormData(this); // Crea un objeto FormData a partir de los datos del formulario y lo almacena en la variable formData.

    //*VALIDAMOS LAS CONTRASENAS
    if (formulario.get('password') != formulario.get('password2')) {
      Swal.fire({
        title: "Las contraseñas no coinciden",
        icon: "error"
      });
      return;
    }

    fetch('../server/api/login/create_registro.service.php', {
        method: 'POST',
        body: formulario
      })
      .then(response => response.json()).then(data => {
        // Maneja la respuesta del servidor aquí
        if (data.success) {
          Swal.fire({
            title: data.message,
            icon: "success"
          });

          setTimeout(() => {
            window.location.href = '../views/login.view.php';
          }, 2300);
        } else {
          Swal.fire({
            title: data.message,
            icon: "error"
          });
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
  })
</script>

<?php require_once('../server/footer.php'); ?>