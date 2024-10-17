<div>
    <div class="container form-nproduct">
        <form action="" id ="frmRegistrar">
            <div>
                <label for="codigo">Código:</label>
                <input type="number" id="codigo" class="form-control">
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" class="form-control">
            </div>
            <div>
                <label for="detalle">Detalle:</label>
                <input type="text" id="detalle" class="form-control">
            </div>
            <div>
                <label for="precio">Precio:</label>
                <input type="number" id="precio" class="form-control">
            </div>
            <div>
                <label for="stock">Stock:</label>
                <input type="number" id="stock" class="form-control">
            </div>
            <div>
                <label for="id_categoria">ID Categoría:</label>
                <input type="number" id="id_categoria" class="form-control">
            </div>
            <div>
                <label for="imagen1">Imagen 1:</label>
                <input type="text" id="imagen1" class="form-control">
            </div>
            <div>
                <label for="id_proveedor">ID Proveedor:</label>
                <input type="number" id="id_proveedor" class="form-control">
            </div>
            <br>
            <button type="button" class="btn btn-success"
            onclick="registrar_producto(); " >Registrar</button>
        </form>
    </div>
    <div>
        
    </div>
    <script src="<?php echo BASE_URL; ?>views/js/functions_productos.js"></script>
</div>
