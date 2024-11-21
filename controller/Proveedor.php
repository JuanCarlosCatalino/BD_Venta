<?php
require_once('../model/ProveedorModel.php');

$tipo = $_REQUEST['tipo'];
$objProveedor = new ProveedorModel();

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Proveedor = $objProveedor->obtener_proveedor();

    if (!empty($arr_Proveedor)) {
        for ($i=0; $i < count($arr_Proveedor); $i++) { 
            $id_proveedor = $arr_Proveedor[$i]->razon_social;
            $proveedor = $arr_Proveedor[$i]->id;
            $opciones='';
            $arr_Proveedor[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Proveedor;
    }

    echo json_encode($arr_Respuesta);
}
?>
///
<?php
require_once('../model/ProveedorModel.php');

$tipo = $_REQUEST['tipo'];
$objProveedor = new ProveedorModel();

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Proveedor = $objProveedor->obtener_proveedor();

    if (!empty($arr_Proveedor)) {
        for ($i=0; $i < count($arr_Proveedor); $i++) { 
            $id_proveedor = $arr_Proveedor[$i]->razon_social;
            $proveedor = $arr_Proveedor[$i]->id;
            $opciones='';
            $arr_Proveedor[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Proveedor;
    }

    echo json_encode($arr_Respuesta);
}
?>