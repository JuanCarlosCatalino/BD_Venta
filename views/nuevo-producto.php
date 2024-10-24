<div class="container form-nproduct " >
<form action="" id="formProducto">
    <div>
        <label for=""> codigo: </label>
            <input type="text"  class="form-control" required id="codigo" name="codigo" >
    </div>
    <div>
        <label for=""> nombre: </label>
            <input type="text" class="form-control" required id="nombre" name="nombre" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" class="form-control" required id="detalle" name="detalle" >
    </div>
    <div>
        <label for=""> precio:</label>
            <input type="number" class="form-control"  required id="precio" name="precio">
    </div>
    <div>
        <label for=""> stock:</label>
            <input type="number" class="form-control" required id="stock" name="stock" >
    </div>
    <div>
        <label for="">idcategoria: </label>
            <input type="number"  class="form-control" required id="idcategoria" name="idcategoria">
    </div>
    <div>
        <label for=""> imagen: </label>
            <input type="text" class="form-control"  required id="imagen" name="imagen">
    </div><div>
        <label for=""> idproveedor:</label>
            <input type="number" class="form-control" required  id="idproveedor" name="idproveedor">
    </div>
    <br>
    <button type="button"   class="btn btn-success"  onclick="registrar_producto();">registrar</button>
    </div>
    </div>
</form>
</div>


<script src="<?php echo BASE_URL;?>views/js/functions_productos.js"></script>
<script>listar_categorias();</script>
