<?php require_once('../server/header.php'); ?>

<body>
  <div class="d-flex">

    <!--//** CONTENEDOR DEL MENU -->
    <?php require_once('../server/menu.php'); ?>

    <!-- CONTENEDOR DEL PERFIL Y FORMULARIOS -->
    <div class="d-flex flex-column w-100">
      <!-- CONTENEDOR DEL PERFIL -->
      <?php require_once('../server/profile.php'); ?>

      <!-- CONTENEDOR DE LOS FORMULARIOS -->
      <div id="forms" class="d-flex flex-column w-100 p-5 overflow-auto">
        <!-- AQUI SE VA A RENDERIZAR EL TEMPLATE -->
      </div>
    </div>
  </div>
</body>


<script>
  /**
   * Función para activar el menu
   * 
   */
  function touchMenu(index) {
    files = ['', 'list_users', 'pagos_pendientes'];
    const links = document.querySelectorAll('#menu a');

    links.forEach((link, i) => {
      if (i === index) {
        link.classList.add('active');
        link.classList.add('fw-semibold');
        link.classList.remove('link-dark');

      } else {
        link.classList.remove('active');
        link.classList.remove('fw-semibold');
        link.classList.add('link-dark');
      }


      if (index == 11) {
        sessionStorage.removeItem('user');
        sessionStorage.removeItem('isLogged');
        window.location.href = '../index.php';
      }
    });

    renderingTemplate(files[index]);

  }

  /**
   * Función para renderizar el template
   * @param {string} url - La URL del archivo PHP
   */
  function renderingTemplate(url) {

    fetch(url + '.view.php') // Hacer la petición al archivo PHP
      .then(response => response.text()) // Convertir la respuesta a texto
      .then(html => {
        const form = document.getElementById('forms');
        form.innerHTML = html; // Inyectar el contenido en el div


        const scripts = form.querySelectorAll('script');
        scripts.forEach(script => {
          const newScript = document.createElement('script');
          newScript.innerHTML = script.innerHTML;
          document.body.appendChild(newScript);
        });


      })
      .catch(error => console.error('Error cargando la vista:', error));
  }
</script>
<?php require_once('../server/footer.php'); ?>