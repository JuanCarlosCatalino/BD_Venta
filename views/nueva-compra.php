<div class="container form-nproduct">
    <form action="" id="formCompra">
        <div>
            <label for="id_producto">id_producto: </label>
            <input type="text" class="form-control" required id="id_producto" name="id_producto">
        </div>
        <div>
            <label for="cantidad">cantidad: </label>
            <input type="text" class="form-control" required id="cantidad" name="cantidad">
        </div>
        <div>
            <label for="precio">precio:</label>
            <input type="number" class="form-control" required id="precio" name="precio">
        </div>
        <div>
            <label for="id_trabajador">id_trabajador:</label>
            <input type="number" class="form-control" required id="id_trabajador" name="id_trabajador">
        </div>
        <br>
        <button type="button" class="btn btn-success" onclick="registrar_compra();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL;?>views/js/functions_compra"></script>

