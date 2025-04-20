<?php require_once('./server/header.php'); ?>
<?php require_once('./server/api/conexion_db.php'); ?>
<!-- ESTUYLOS DE LA WEB IMPORTANTE NO TOCAR LA RUTA-->
<link rel="stylesheet" href="./assets/styles/style.css">

<div id="navbar">
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid ">
      <div class="logo">
        <img src="./img/logo.jpg" alt="">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#producto">Productos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#sobre">Sobre nosotros</a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="#porqueescogernos">¿Por que escogernos?</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#contacto">Contactanos</a>
          </li>

        </ul>
        <div class="d-flex align-items-center gap-2">
          <p id="name_user" class=" fw-semibold m-0" style="color: #E44E8A;"></p>
          <div>
            <button class="btns fs-5 bi bi-cart" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
          </div>

          <a id="btn-login" class="btns" href="./views/login.view.php"> Inicia Sesión </a>
          <a id="btn-register" class="btns" href="./views/registro.view.php"> Registro</a>
          <button id="btn-logout" id="btn-exit" class="btn  btn-outline-danger" onclick="logout()">Salir</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="100" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Archivo</button>
            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btns">Comprar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="menu" id="menu">
        <a data-aos="fade-up" data-aos-duration="800" href="#home">Home</a>
        <a data-aos="fade-up" data-aos-duration="900" href="#producto">Productos</a>
        <a data-aos="fade-up" data-aos-duration="1100" href="#sobre">Sobre nosotros</a>
        <a data-aos="fade-up" data-aos-duration="1000" href="#porqueescogernos">¿Por que escogernosnos?</a>
        <a data-aos="fade-up" data-aos-duration="1200" href="#contacto">Contactanos</a>
    </div> -->

  <!-- <div class="shopping">
    <div class="search">
      <input type="text" placeholder="Search">
      <i class="fa-solid fa-magnifying-glass"></i>

    </div>
    <a href="Formulario.html">
      <button data-aos="fade-right" class="btn inicia Seccion">Inicia Sección</button>
    </a>

  </div> -->


  <i class="fa-solid fa-bars" id="bars"></i>
</div>
<section class="wrapper hero_wrapper">
  <div class="hero" id="home">
    <div class="icecream_info">
      <h1 data-aos="fade-right" data-aos-duration="1500">BIENVENIDO AL MUNDO DE LOS <SPan>HELADOS</SPan> TU LUGAR FAVORITO</h1>
      <p data-aos="fade-right" data-aos-duration="1600">Heladería Fridu. El mejor lugar para alegrar tu tarde</p>
      <div class="social_media">
        <i data-aos="fade-up" data-aos-duration="1000" class="fa-brands fa-facebook"></i>
        <i data-aos="fade-up" data-aos-duration="1100" class="fa-brands fa-twitter"></i>
        <i data-aos="fade-up" data-aos-duration="1200" class="fa-brands fa-pinterest"></i>
        <i data-aos="fade-up" data-aos-duration="1300" class="fa-solid fa-phone"></i>
      </div>
    </div>
    <div class="icecream_img">
      <img data-aos="fade-left" data-aos-duration="1500" src="./img/header_img.png" alt="">
    </div>
  </div>
</section>
<section class="wrapper">
  <div class="our_product" id="producto">
    <div data-aos="fade-up" data-aos-duration="1500" class="heading">
      <h3 style="text-align: center;">100% Natural</h3>
      <h1>Nuestros Productos</h1>
    </div>

    <div class="product_menu">
      <?php
      $sql = "SELECT name FROM categories";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<button data-aos="fade-up" data-aos-duration="1600" type="button" data-filter=".' . $row['name'] . '">' .  strtoupper($row['name']) . '</button>';
        }
      }
      ?>
    </div>



    <div class="container">
      <div class="mix venila" data-order="1"><img src="img/Bati.jpg" alt=""></div>
      <div class="mix strowberry" data-order="2"><img src="img/Tetas1.jpg" alt=""></div>
      <div class="mix venila caeremilita" data-order="3"><img src="img/Barquillon.jpg" alt=""></div>
      <div class="mix chocolet" data-order="4"> <img src="img/Cono.jpg" alt=""></div>
      <div class="mix strowberry" data-order="4"><img src="img/Tina1.jpg" alt=""></div>
      <div class="mix chocolet caeremilita" data-order="4"><img src="img/Tina3.jpg" alt=""></div>
    </div>
  </div>
  </div>
</section>
<section class="wrapper">
  <div class="about" id="sobre">
    <div class="about_img">
      <img data-aos="fade-up" data-aos-duration="1400" src="data:image/jpeg;base64,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" alt="">
    </div>
    <div class="about_info">
      <div data-aos="fade-left" data-aos-duration="1400" class="heading">
        <h3>Sobre nosotros</h3>
        <h1>Disfruta antes de que se derrita</h1>
      </div>
      <div style="text-align: justify; ">
        <p data-aos="fade-left" data-aos-duration="1500">Nuestra heladería es la elección perfecta
          para los amantes del helado. Elaboramos cada sabor con la más alta calidad,
          creando una experiencia única en cada cucharada. Nuestra pasión por el helado se refleja en la variedad
          de sabores y presentaciones que ofrecemos. Además, nos preocupamos
          por la satisfacción de nuestros clientes, brindando un servicio amable y personalizado. ¡Visítanos y descubre
          por qué somos la heladería líder en el mercado!
        </p>
      </div>
      <div class="cheak_box">
        <div class="col">
          <div data-aos="fade-left" data-aos-duration="1600" class="row">
            <i class="fa-regular fa-square-check"></i>
            <p>Productos Caseros</p>
          </div>
          <div data-aos="fade-left" data-aos-duration="1700" class="row">
            <i class="fa-regular fa-square-check"></i>
            <p>Productos de Calidad</p>
          </div>
          <div data-aos="fade-left" data-aos-duration="1800" class="row">
            <i class="fa-regular fa-square-check"></i>
            <p>Personal Capacitado</p>
          </div>
        </div>
        <div class="col">
          <div data-aos="fade-left" data-aos-duration="1600" class="row">
            <i class="fa-regular fa-square-check"></i>
            <p>Variedad</p>
          </div>
          <div data-aos="fade-left" data-aos-duration="1700" class="row">
            <i class="fa-regular fa-square-check"></i>
            <p>Confiable </p>
          </div>
          <div data-aos="fade-left" data-aos-duration="1800" class="row">
            <i class="fa-regular fa-square-check"></i>
            <p>El Mejor Servicio</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="wrapper">
  <div class="choose_us" id="porqueescogernos">
    <div class="choose_us_info">
      <div data-aos="fade-right" data-aos-duration="1500" class="heading">
        <h3>¿Por qué escogernos?</h3>
        <h1>Nuestro servicio nos convierte en tu mejor opcion</h1>
      </div>
      <p data-aos="fade-right" data-aos-duration="1600" class="pera">Contamos con precios al mayor y al detal, brindandote la oporunidad de aliarte con nosotros y hacer crecer tu negocio.</p>
      <div class="our_skills">
        <div data-aos="fade-right" data-aos-duration="1700" class="skills skill1">
          <p>Cliente Satisfecho</p>
          <p>87%</p>
        </div>
        <div data-aos="fade-right" data-aos-duration="1800" class="persontage p1"></div>
        <div data-aos="fade-right" data-aos-duration="1900" class="skills skill2">
          <p>Productos Caseros</p>
          <p>100%</p>
        </div>
        <div data-aos="fade-right" data-aos-duration="2000" class="persontage p2"></div>
        <div data-aos="fade-right" data-aos-duration="2100" class="skills skill3">
          <p>Habilidad del personal</p>
          <p>95%</p>
        </div>
        <div data-aos="fade-right" data-aos-duration="2200" class="persontage p3"></div>
      </div>
    </div>
    <div class="choose_us_img">
      <img data-aos="fade-down" data-aos-duration="1500" class="i_cream" src="./img/Tina2.jpg" alt="">
      <img data-aos="fade-up" data-aos-duration="1700" class="i_cream2" src="./img/Tina3.jpg" alt="">
    </div>
  </div>
</section>

<!--Compra-->
<section class="wrapper">
  <div class="our_menu">
    <div data-aos="fade-down" data-aos-duration="1500" class="heading menu_heading">
      <h3>Nuestro Menú</h3>
      <h1>Recomendaciones de nuestro menú</h1>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card  h-100">
            <img src="img/Barquillon.jpg" class=" rounded-top-3" alt="..." style="height: 400px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title">Barquillones</h5>
              <p class="card-text">9 Barquillon 17cm x 12$</p>
              <a href="#" class="btns w-100">Agregar al carrito</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/cono.jpg" class=" rounded-top-3" alt="..." style="height: 400px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title">Conos</h5>
              <p class="card-text">Al mayor 25 x 13$</p>
              <a href="#" class="btns w-100">Agregar al carrito</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/Tetas1.jpg" class=" rounded-top-3" alt="..." style="height: 400px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title">Tetas</h5>
              <p class="card-text">25 Tetas Gourment 200gr x 12$</p>
              <a href="#" class="btns w-100">Agregar al carrito</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


<div class="contact" id="contacto">
</div>

<div class="footer">
  <div class="footer_social">
    <div class="logo f_logo">
      <img src="/img/logo.png" alt="">
    </div>
    <p>Si deseas conocer un poco mas de nosotros, puedes visitar cada una de nuestras redes sociales.</p>
    <div class="social_media media">
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-pinterest"></i>
      <i class="fa-solid fa-phone"></i>
    </div>
  </div>
  <div class="Quicklinks">
    <div class="footer_heading">
      <h3>Contactos directos</h3>
    </div>
    <p>heladeriafridu@gmail.com</p>
    <p>+58 424 5566789</p>
  </div>
  <div class="work">
    <div class="footer_heading">
      <h3>Horas de Trabajo</h3>
    </div>
    <p>De lunes a sabados de 8am - 6pm</p>

  </div>
  <div class="Uesfullinks">
    <div class="footer_heading">
      <h3>Recuerda</h3>
    </div>
    <p>Somos la mejor calidad en helados</p>
  </div>
</div>


<?php require_once('./server/footer.php'); ?>
</body>



<script>
  window.addEventListener('load', () => {
    let user = JSON.parse(sessionStorage.getItem('usuario'));
    let is_logged = sessionStorage.getItem('is_logged');

    let username = document.getElementById('name_user');
    let logout = document.getElementById('btn-logout');
    let login = document.getElementById('btn-login');
    let register = document.getElementById('btn-register');



    username.innerHTML = is_logged ? user.nombre : '';
    logout.style.display = is_logged ? 'block' : 'none';
    login.style.display = is_logged ? 'none' : 'block';
    register.style.display = is_logged ? 'none' : 'block';


  })
  /**
   * Salir de la session
   */
  function logout() {
    sessionStorage.removeItem('is_logged');
    sessionStorage.removeItem('usuario');
    location.reload();
  }
</script>

</html>