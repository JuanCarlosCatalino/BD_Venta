<?php
require_once ('../model/compraModel.php');
$tipo = $_REQUEST['tipo'];

// instancia del modelo Compra
$objCompra = new CompraModel();

if ($tipo == "registrar") {
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id_trabajador = $_POST['id_trabajador'];

    $arr_Respuesta = array('status' => false, 'mensaje' => '');

    $resultado = $objCompra->registrar_compra($id_producto, $cantidad, $precio, $id_trabajador);

    if ($resultado) {
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['mensaje'] = "Compra registrada con éxito";
    } else {
        $arr_Respuesta['mensaje'] = "Error al registrar la compra";
    }

    echo json_encode($arr_Respuesta);
}
?>


