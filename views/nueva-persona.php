<div class="container form-persona">
    <form action="" id="formPersona">
        <div>
            <label for="">Nro Identidad:</label>
            <input type="text" class="form-control" required id="nro_identidad" name="nro_identidad">
        </div>
        <div>
            <label for="">Razón Social:</label>
            <input type="text" class="form-control" required id="razon_social" name="razon_social">
        </div>
        <div>
            <label for="">Teléfono:</label>
            <input type="text" class="form-control" required id="telefono" name="telefono">
        </div>
        <div>
            <label for="">Correo:</label>
            <input type="email" class="form-control" required id="correo" name="correo">
        </div>
        <div>
            <label for="">Departamento:</label>
            <input type="text" class="form-control" required id="departamento" name="departamento">
        </div>
        <div>
            <label for="">Provincia:</label>
            <input type="text" class="form-control" required id="provincia" name="provincia">
        </div>
        <div>
            <label for="">Distrito:</label>
            <input type="text" class="form-control" required id="distrito" name="distrito">
        </div>
        <div>
            <label for="">Código Postal:</label>
            <input type="text" class="form-control" required id="codigo_postal" name="codigo_postal">
        </div>
        <div>
            <label for="">Dirección:</label>
            <input type="text" class="form-control" required id="direccion" name="direccion">
        </div>
        <div>
            <label for="">Rol:</label>
            <input type="text" class="form-control" required id="rol" name="rol">
        </div>
        <div>
            <label for="">Contraseña:</label>
            <input type="password" class="form-control" required id="password" name="password">
        </div>
        <div>
            <label for="">Estado:</label>
            <input type="text" class="form-control" required id="estado" name="estado">
        </div>
        <div>
            <label for="">Fecha de Registro:</label>
            <input type="date" class="form-control" required id="fecha_registro" name="fecha_registro">
        </div>
        <br>
        <button type="button" class="btn btn-success" onclick="registrar_persona();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>

