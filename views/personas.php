<div class="container">
        <h1 class="text-center mb-4">Usuarios</h1>
        <table id="tbl_personas" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nro Identidad</th>
                    <th>Razón Social</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Cod Postal</th>
                    <th>Dirección</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>F. Registro</th>
                </tr>
            </thead>
            <tbody id="body_personas">
                <!-- Aquí se insertarán los datos de los usuarios -->
            </tbody>
        </table>
    </div>
<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>

<style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        h1 {
            color: #343a40;
        }
        .table thead th {
            background-color: #007bff;
            color: white;
        }
        .table tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }
        .table tbody tr:hover {
            background-color: #dee2e6;
        }
    </style>
