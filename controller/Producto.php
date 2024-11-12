<?php 
require_once ('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

$objProducto = new ProductoModel(); // instancio la clase model producto

if($tipo=="registrar"){
     //print_r($_POST);
     //echo $_FILES['imagen']['name'];


    if ($_POST){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $idcategoria = $_POST['idcategoria'];
        $imagen = 'imagen';
        $idproveedor = $_POST['idproveedor'];
        
        if($codigo==""||$nombre==""||$detalle==""||$precio==""||$stock=="" 
        ||$idcategoria==""||$imagen==""||$idproveedor==""){
            $arr_Respuesta = array('status' =>false,
            'mensaje' =>'error campos vacios');

 
    }else{
        $arrProducto = $objProducto -> registrarProducto($codigo,$nombre,
        $detalle, $precio,$stock,$idcategoria,$imagen,$idproveedor);
        if ($arrProducto->id>0) {
            $arr_Respuesta = array('status'=>true,
            'mensaje'=>'Registro exitoso');
            //cargar archivos
            $archivo = $_FILES['imagen']['tmp_name'];
            
     $destino = './assets/img_productos/';
     $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],
     PATHINFO_EXTENSION));

     $nombre = $arrProducto->id.".".$tipoArchivo;

     if (move_uploaded_file($archivo,$destino.$nombre)) {
        $arr_imagen = $objProducto->actualizar_imagen($id,$nombre);

     }else{
        $arr_Respuesta =array ('status'=> true,
        'mensaje' => 'Registro Exitoso, error al subir imagen');
     }

        }else{
            $arr_Respuesta = array('status'=>false,
            'mensaje'=>'Error al registrar producto');
        }
        echo json_encode($arr_Respuesta);
    }
}

}
 ?>