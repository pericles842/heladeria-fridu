<?php require_once('../server/header.php'); ?>

<!-- Modal de formularios-->
<div class="modal fade" id="exampleModal" tabindex="100" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-lg">
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
      <div class="d-flex flex-column w-100 h-100 p-3 overflow-auto  gap-3" style="background-color:rgb(242, 242, 242);">
        <!-- boton para crear nuevo registro -->
        <button class="btn btn-success" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="d-flex justify-content-center align-items-center gap-2">
            <i class="bi bi-plus-square fs-4"></i>
            <span class="fs-5">Crear</span>
          </div>
        </button>

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

    modulesTheUser = JSON.parse(sessionStorage.getItem('usuario')).permission;

    const links = document.querySelectorAll('#menu a');

    for (let i = 0; i < links.length; i++) {
      let link = links[i];
      let key_module = link.textContent.trim().toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")

      if (!key_module || key_module === 'salir') continue;

      let moduleUser = modulesTheUser.find(module_user => module_user.key == key_module)

      if (!moduleUser.ver) link.remove();
    }

    //para  crear el renderer la primera pantalla sin darle al menu
    renderingTemplate('list_roles');
    renderingTemplate('roles', 'formulario-modal');
  })
  /**
   * Función para activar el menu
   * 
   */
  function touchMenu(index) {
    //array con los nombres de las vistas 
    files = ['', 'list_roles', 'list_user', 'list_provider', 'list_warehouse',
      'list_product', 'list_category', 'inventario', 'list_despacho', '', 'list_gasto', 'list_pagos'
    ];

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


      if (index == 12) {
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
  function renderingTemplate(url, location = 'forms', data = null) {

    fetch(url + '.view.php') // Hacer la petición al archivo PHP
      .then(response => response.text()) // Convertir la respuesta a texto
      .then(html => {
        const form = document.getElementById(location);
        form.innerHTML = html; // Inyectar el contenido en el div

        //PROCEDMIENTO PARA  EDITAR EL FORMULARIOA
        if (data) {
          // Capturamos el formulario real que se encuentra dentro del contenedor
          const innerForm = form.querySelector('form');

          if (innerForm) {
            // Creamos el input oculto con el ID
            const idInput = document.createElement('input');
            idInput.type = 'hidden';
            idInput.name = 'id';
            idInput.value = data.id;

            // Insertamos al principio del form (o podrías usar appendChild si prefieres al final del form)
            innerForm.insertBefore(idInput, innerForm.firstChild);

            // Rellenamos los inputs existentes con los datos
            const inputs = innerForm.querySelectorAll('input');
            inputs.forEach(input => {
              if (data.hasOwnProperty(input.name)) {
                input.value = data[input.name];
              }
            });
          }
        }



        const scripts = form.querySelectorAll('script');
        scripts.forEach(script => {
          const newScript = document.createElement('script');
          newScript.innerHTML = script.innerHTML;

          //Si la etiqueta tiene contenido se inserta en el body
          if (newScript.textContent.trim()) document.body.appendChild(newScript);

        });

      })
      .catch(error => console.error('Error cargando la vista:', error));
  }
</script>
<?php require_once('../server/footer.php'); ?>