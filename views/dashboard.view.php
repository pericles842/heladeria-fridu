<?php require_once('../server/header.php'); ?>

<body>
  <div class="d-flex  vh-100 overflow-hidden">

    <!--//** CONTENEDOR DEL MENU -->
    <?php require_once('../server/menu.php'); ?>

    <!-- CONTENEDOR DEL PERFIL Y FORMULARIOS -->
    <div class="d-flex flex-column w-100">
      <!-- CONTENEDOR DEL PERFIL -->
      <?php require_once('../server/profile.php'); ?>

      <!-- CONTENEDOR DE LOS FORMULARIOS -->
      <div id="forms" class="d-flex flex-column w-100 h-100 p-3 overflow-auto " style="background-color:rgb(242, 242, 242);">
        <!-- AQUI SE VA A RENDERIZAR EL TEMPLATE -->
      </div>
    </div>
  </div>
</body>


<script>
  window.addEventListener('load',()=>{
    renderingTemplate('cargos');
  })
  /**
   * Función para activar el menu
   * 
   */
  function touchMenu(index) {
    //array con los nombres de las vistas 
    files = ['', 'cargos', 'create_user','provedor','almacen','list_user','categoria','','despacho'];
 
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


      if (index == 10) {
        sessionStorage.removeItem('usuario');
        sessionStorage.removeItem('is_logged');
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