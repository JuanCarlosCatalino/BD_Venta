    
<div class="container">
    <h1>Categorias</h1>
        <table id="tbl_categoria" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Detalle</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="body_categorias">

            </tbody>
        </table>
    </div>
<script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script>

<style>
    .container{
     display: block;
    }
        #tbl_categoria {
            margin-top: 20px;
        }
        #tbl_categoria th {
            background-color: #007bff;
            color: white;
        }
        #tbl_categoria tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        #tbl_categoria tbody tr:hover {
            background-color: #e9ecef;
        }
    </style>