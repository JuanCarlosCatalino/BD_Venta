<?php 
require_once ('./model/productoModel.php');
$tipo = $_REQUEST['tipo'];

$objProducto = new ProductoModel(); // instancio la clase model producto

if($tipo=="registrar"){
    // print_r($_POST);
    if ($_POST){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen1 = $_POST['imagen1'];
        $proveedor = $_POST['proveedor'];
        
        if($codigo==""||$nombre==""||$detalle==""||$precio==""||$stock=="" 
        ||$categoria==""||$imagen1==""||$proveedor==""){
            $arr_Respuesta = array('status' =>false,
            'mensaje' =>'error campos vacios');

 
    }else{
        $arrProducto = $objProducto -> registrarProducto($codigo,$nombre,
        $detalle, $precio,$stock,$categoria,$imagen1,$proveedor);
    }
}
}
 ?>