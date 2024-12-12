<div class="container mt-5">
        <h1 class="text-center mb-4">Panel de Control</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        Usuarios
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total de usuarios registrados: 150</p>
                        <a href="<?php echo BASE_URL;?>nueva-persona" class="btn btn-primary">Registrar usuarios</a>
                        <a href="<?php echo BASE_URL;?>personas" class="btn btn-primary">ver usuarios</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        Ventas
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total de ventas: $3,200</p>
                        <a href="#" class="btn btn-success">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-warning text-white">
                        Productos
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total de productos: 75</p>
                        <a href="<?php echo BASE_URL;?>nuevo-producto" class="btn btn-primary">Registrar producto</a>
                        <a href="<?php echo BASE_URL;?>productos" class="btn btn-primary">ver productos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-warning text-white">
                        Categorias
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total de productos: 75</p>
                        <a href="<?php echo BASE_URL;?>nueva-categoria" class="btn btn-primary">Registrar Categoria</a>
                        <a href="<?php echo BASE_URL;?>categorias" class="btn btn-primary">ver categorias</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        Compras
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total de compras: $4,200</p>
                        <a href="<?php echo BASE_URL;?>nueva-compra" class="btn btn-success">Registra compra</a>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    <a class="btn btn-primary d-flex justify-content-center" href="<?php echo BASE_URL;?>menu"> Volver al menu</a>