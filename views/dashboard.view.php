<?php require_once('../server/header.php'); ?>

<!-- Modal de formularios-->
<div class="modal fade" id="exampleModal" tabindex="100" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="formulario-modal" class="p-2">

        </div>
      </div>
    </div>
  </div>
</div>

<body>
  <div class="d-flex  vh-100 overflow-hidden">

    <!--//** CONTENEDOR DEL MENU -->
    <?php require_once('../server/menu.php'); ?>

    <!-- CONTENEDOR DEL PERFIL Y FORMULARIOS -->
    <div class="d-flex flex-column w-100">
      <!-- CONTENEDOR DEL PERFIL -->
      <?php require_once('../server/profile.php'); ?>

      <!-- CONTENEDOR DE LOS FORMULARIOS -->
      <div class="d-flex flex-column w-100 h-100 p-3 overflow-auto " style="background-color:rgb(242, 242, 242);">
        <!-- boton para crear nuevo registro -->
        <button class="btn btn-success" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="d-flex justify-content-center align-items-center gap-2">
            <i class="bi bi-plus-square fs-4"></i>
            <span class="fs-5">Crear </span>
          </div>
        </button>
        <!-- Modal de formularios-->
        <div class="modal fade" id="exampleModal" tabindex="100" aria-labelledby="exampleModalLabel" aria-hidden="false">
          <div class="modal-dialog ">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div id="formulario-modal" class="p-2">

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- PANTALLA DEL TEMPLATE -->
        <div id="forms">
          <!-- AQUI SE VA A RENDERIZAR EL TEMPLATE -->
        </div>
      </div>
    </div>
  </div>


</body>


<script>
  window.addEventListener('load', () => {
    renderingTemplate('cargos');
  })
  /**
   * Función para activar el menu
   * 
   */
  function touchMenu(index) {
    //array con los nombres de las vistas 
    files = ['', 'cargos', 'list_user', 'list_provedor', 'list_almacen', 'list_user', 'categoria', '', 'despacho'];

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

    //se renderiza el template
    renderingTemplate(files[index]);

    //Se renderiza el modal
    let file = files[index].split('_');
    file.shift();

    renderingTemplate(file.join('_'), 'formulario-modal');

  }

  /**
   * Función para renderizar el template
   * @param {string} url - La URL del archivo PHP
   */
  function renderingTemplate(url, location = 'forms') {

    fetch(url + '.view.php') // Hacer la petición al archivo PHP
      .then(response => response.text()) // Convertir la respuesta a texto
      .then(html => {
        const form = document.getElementById(location);
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