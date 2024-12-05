<?php
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];
$objProveedor = new PersonaModel();

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Proveedor = $objProveedor->obtener_proveedores();

    if (!empty($arr_Proveedor)) {
        for ($i=0; $i < count($arr_Proveedor); $i++) { 
            $proveedor = $arr_Proveedor[$i]->id;
            $id_proveedor = $arr_Proveedor[$i]->razon_social;
            $opciones='';
            $arr_Proveedor[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Proveedor;
    }

    echo json_encode($arr_Respuesta);
}
?>