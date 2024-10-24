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
    
    
    
    <div class="header">
        <div>
            <h1>Mi cuenta</h1>
           
        </div>
    </div>
    <div class="container"  style="margin-top:0px;">
        <div class="row">
            <div class="col-md-2 sidebar">
                <p class="text-uppercase">Tu Cuenta</p>
                <a href="#">Tu Cuenta</a><br>
                <a href="#">Editar Direcciones</a><br>
                <a href="#">Historial de Ordenes</a><br>
                <a href="#">Preferencias de Correo</a>
            </div>
            <div class="col-md-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="section-title">Mi cuenta</h1>
                    <button class="btn btn-outline-dark">Cerrar Sesión</button>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="section-title">Tus direcciones</h2>
                        <p class="text-uppercase">Catalino Egoavil Juan Carlos</p>
                        <p>Catalino Egoavil Juan Carlos<br>Perú</p>
                        <button class="btn btn-custom">Ver Direcciones</button>
                    </div>
                    <div class="col-md-4">
                        <h2 class="section-title">Historial de ordenes</h2>
                        <p class="section-subtitle">Aquí puedes ver tus ordenes y los productos comprados</p>
                        <button class="btn btn-custom">Ver Mis Ordenes</button>
                    </div>
                    <div class="col-md-4">
                        <h2 class="section-title">¡Todavía no tienes compras!</h2>
                        <p>¿Qué esperas para llevártelo todo?</p>
                        <button class="btn btn-custom">Empieza a Comprar Ahora</button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h2 class="section-title">Tu historial de compras</h2>
                        <div class="chart-placeholder">
                            <p>Gráfico de compras</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>