<!-- Categorías centradas -->
<div class="collapse navbar-collapse justify-content-center" id="navbarNav" style="margin-left:200PX ;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="<?php echo BASE_URL ?>tazas">Tazas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL ?>polos">Polos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo BASE_URL ?>menu">EGO-MUNDO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL ?>gorras">Gorras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL ?>almohadas">almohadas</a>
          </li>
        </ul>
      </div>

      <!-- Barra de búsqueda y íconos de perfil y carrito -->

      <!-- Barra de búsqueda -->
      <form class="d-flex me-3">
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1">
            <i class="fas fa-search"></i> <!-- Ícono de búsqueda -->
          </span>
          <input class="form-control" type="search" placeholder="Buscar" aria-label="Search"
            aria-describedby="basic-addon1">
        </div>
      </form>

      <!-- Íconos de perfil y carrito -->
      <a href=" <?php echo BASE_URL ?>perfil" class="me-3"> perfil
        <i class="fas fa-user fa-lg"></i>
      </a>
      <a href=" <?php echo BASE_URL ?>carrito"> carrito
        <i class="fas fa-shopping-cart fa-lg"></i>
      </a>

    </div>
    </div>
  </nav>
  <div class="video-container">
    <video autoplay muted loop>
      <source src="video/videoplayback (online-video-cutter.com).mp4" type="video/mp4">

    </video>
    <div class="overlay-text"> ! <strong>10 %</strong> de descuento solo esta semana ¡</div>
    <div class="overlay-text1">! aprovecha con nosotros ¡</div> <!-- Texto superpuesto -->
    <button class="overlay-button">compra ahora</button> <!-- Botón superpuesto -->
  </div>
  <div class="Categoría">
    nuestras Categorías
  </div>
  <div class="container-fluid" style="margin-top: 50px;">
    <div class="row " style="margin-left: 100px ;  margin-right: 100px; margin-top: 0px;">
      <!-- Categoría 1 -->
      <div class="col-md-3 col-sm-6" style="height: 500px;">
    <a href="<?php echo BASE_URL ?>tazas" style="text-decoration: none; color: inherit;">
        <div class="Categorías">
            <img src="img/tazacat.png" alt="Categoría 1">
            <h5>Tazas</h5> <!-- Título en el pie -->
        </div>
    </a>
</div><div class="col-md-3 col-sm-6" style="height: 500px;">
    <a href="<?php echo BASE_URL ?>polos" style="text-decoration: none; color: inherit;">
        <div class="Categorías">
            <img src="img/polocat.jpg" alt="Categoría 1">
            <h5>Polos</h5> <!-- Título en el pie -->
        </div>
    </a>
</div><div class="col-md-3 col-sm-6" style="height: 500px;">
    <a href="<?php echo BASE_URL ?>gorras" style="text-decoration: none; color: inherit;">
        <div class="Categorías">
            <img src="img/gorracat.png" alt="Categoría 1">
            <h5>Gorras</h5> <!-- Título en el pie -->
        </div>
    </a>
</div><div class="col-md-3 col-sm-6" style="height: 500px;">
    <a href="<?php echo BASE_URL ?>almohadas" style="text-decoration: none; color: inherit;">
        <div class="Categorías">
            <img src="img/almocat.png" alt="Categoría 1">
            <h5>almohadas</h5> <!-- Título en el pie -->
        </div>
    </a>
</div>
</div>


    

  <div class="container-fluid p-0" style="margin-top: 10px;">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner ">
        <div class="carousel-item active" data-bs-interval="2200">
          <img src="img/cabtazas.png" class="d-block w-100" alt="..." width="100%"
            height="550px">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2200">
          <img src="img/carugor.png" class="d-block w-100" alt="..." width="100%" height="550px">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2200">
          <img src="img/CABPOLOS.png" class="d-block w-100" alt="..." width="100%" height="500px">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="Categoría">
    <center>
      Productos disponibles </center>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4" style="padding-left:150px ; padding-right: 150px; margin-top: 0px;padding-bottom:30px; background-color: #c9c8c8;">
    <div class="col">
      <a href="carrito.php" class="textocompra text-decoration-none"> <!-- Enlaza toda la tarjeta -->
        <div class="card h-100 border-0">
          <img src="img/2bb8f1c3f5a03e3788dfba32fd56c8ae.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Polo personalizado</h5>
            <p class="card-text">Polo personalizado de parejas, color blanco con estampa libre.</p>
          </div>
          <div class="card-footer" style="display: flex; justify-content: end;">
            <a href="./carrito.php" class="botoncompra">S/ 19.99</a>
          </div>
        </div>
      </a>
    </div>
    
    
    <div class="col">
      <a href="carrito.php" class="textocompra text-decoration-none"> <!-- Enlaza toda la tarjeta -->
        <div class="card h-100 border-0">
          <img src="img/2bb8f1c3f5a03e3788dfba32fd56c8ae.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Polo personalizado</h5>
            <p class="card-text">Polo personalizado de parejas, color blanco con estampa libre.</p>
          </div>
          <div class="card-footer" style="display: flex; justify-content: end;">
            <a href="carrito.php" class="botoncompra">S/ 19.99</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="carrito.php" class="textocompra text-decoration-none"> <!-- Enlaza toda la tarjeta -->
        <div class="card h-100 border-0">
          <img src="img/2bb8f1c3f5a03e3788dfba32fd56c8ae.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Polo personalizado</h5>
            <p class="card-text">Polo personalizado de parejas, color blanco con estampa libre.</p>
          </div>
          <div class="card-footer" style="display: flex; justify-content: end;">
            <a href="carrito.php" class="botoncompra">S/ 19.99</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="carrito.php" class="textocompra text-decoration-none"> <!-- Enlaza toda la tarjeta -->
        <div class="card h-100 border-0">
          <img src="img/2bb8f1c3f5a03e3788dfba32fd56c8ae.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Polo personalizado</h5>
            <p class="card-text">Polo personalizado de parejas, color blanco con estampa libre.</p>
          </div>
          <div class="card-footer" style="display: flex; justify-content: end;">
            <a href="carrito.php" class="botoncompra">S/ 19.99</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="carrito.php" class="textocompra text-decoration-none"> <!-- Enlaza toda la tarjeta -->
        <div class="card h-100 border-0">
          <img src="img/2bb8f1c3f5a03e3788dfba32fd56c8ae.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Polo personalizado</h5>
            <p class="card-text">Polo personalizado de parejas, color blanco con estampa libre.</p>
          </div>
          <div class="card-footer" style="display: flex; justify-content: end;">
            <a href="carrito.php" class="botoncompra">S/ 19.99</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="carrito.php" class="textocompra text-decoration-none"> <!-- Enlaza toda la tarjeta -->
        <div class="card h-100 border-0">
          <img src="img/2bb8f1c3f5a03e3788dfba32fd56c8ae.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Polo personalizado</h5>
            <p class="card-text">Polo personalizado de parejas, color blanco con estampa libre.</p>
          </div>
          <div class="card-footer" style="display: flex; justify-content: end;">
            <a href="carrito.php" class="botoncompra">S/ 19.99</a>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="container">
    <div class="left-section">
     <h2>
      EGO-MUNDO
     </h2>
     <h1>
      QUIÉNES SOMOS
     </h1>
     <div class="icon-text">
      <i class="fas fa-pencil-alt">
      </i>
      <div>
       <h2>
        Diseñar
       </h2>
       <p>
        Diseñamos tu imaginación,  dinos tus ideas para tu nueva pieza favorita.
       </p>
      </div>
     </div>
     <div class="icon-text">
      <i class="fas fa-tshirt">
      </i>
      <div>
       <h2>
        Comprar
       </h2>
       <p>
        Descubre tu diseño y elige entre más de 250 productos diferentes que podemos imprimir o bordar según tus deseos.
       </p>
      </div>
     </div>
     <div class="buttons">
     <a href="<?php echo BASE_URL ?>menu">
    <button class="design-button">
        Comprar Ahora
    </button>
</a>

<a href="<?php echo BASE_URL ?>carrito">
    <button class="buy-button">
        Ir al Carrito
    </button>
</a>
     </div>
    </div>
    <div class="right-section">
     <img alt="Three people wearing custom printed sweatshirts and hoodies" src="img/2bb8f1c3f5a03e3788dfba32fd56c8ae.png"/>
    </div>
   </div>