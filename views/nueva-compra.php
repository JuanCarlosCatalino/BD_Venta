<div class="container form-nproduct " >
<form action="" id="formCompra">
    <div>
        <label for=""> id del producto: </label>
            <input type="number"  class="form-control" required id="id_producto" name="id_producto" >
    </div>
    <div>
        <label for=""> cantidad: </label>
            <input type="number" class="form-control" required id="cantidad" name="cantidad" >
    </div>
    <div>
        <label for=""> precio: </label>
            <input type="number" class="form-control" required id="precio" name="precio" >
    </div>
    <div>
        <label for=""> id_trabajador:</label>
            <input type="number" class="form-control"  required id="id_trabajador" name="id_trabajador">
    </div>
    <br>
    <button type="button"   class="btn btn-success"  onclick="registrar_compra();">registrar</button>
    </div>
    </div>
   
</form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functios_compra.js"></script>

