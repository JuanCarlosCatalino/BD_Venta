
<h1>Registrar categoria</h1>
<form id="formRegistrarCaregoria" action="" class="bg-white p-4 rounded shadow w-100" style="max-width: 400px;">
        <div class="form-group">
            <label for="nombre" class="font-weight-bold">Nombre:</label>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" required>

            <label for="detalle" class="font-weight-bold mt-3">Detalle:</label>
            <textarea id="detalle" name="detalle" class="form-control" placeholder="Detalle" required></textarea>
            <button type="button" class="btn btn-success mt-3" onclick="registrar_categoria();">Registrar</button>
        </div>
    </form>

<script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script>
