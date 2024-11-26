<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = isset($_REQUEST['tipo']) ? $_REQUEST['tipo'] : null;

# instacncion ña clase model producto
$objProducto = new productoModel();
$objCategoria = new categoriaModel();
$objPersona = new personaModel();

if ($tipo=="registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];
      
     if($_POST);
    $codigo= $_POST['codigo'];
    $nombre= $_POST['nombre'];
    $detalle= $_POST['detalle'];
    $precio= $_POST['precio'];
    $stock= $_POST['stock'];
    $idcategoria= $_POST['idcategoria'];
    $imagen= 'imagen';
    $idproveedor= $_POST['idproveedor'];
    if ($codigo=="" || $nombre=="" || $detalle=="" || $precio==""|| $stock==""|| $idcategoria=="" || $imagen=="" || $idproveedor=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        //cargar archivos
        $archivo = $_FILES['imagen']['tmp_name'];
        $destino = '../assets/img_productos/';
        $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

        $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $idproveedor,$tipoArchivo);
        if ($arrProducto->id_n>0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            $nombre = $arrProducto->id_n . "." . $tipoArchivo;

            if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
            } else {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
            }
            //cargar archivos
            $archivo = $_FILES['imagen']['tmp_name'];
            $destino = './assets/img_productos/';
            $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));
            $nombre= $arrProducto->id.".".$tipoArchivo;    
            if (move_uploaded_file($archivo,$destino.$nombre)) {
                $arr_imagen  = $objProducto->actualizar_imagen($id,$nombre);

            }
            else {
                $arr_Respuesta = array('status' => true, 'mensaje' =>'ERROR AL SUBIR IMAGEN');
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}
if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_productos = $objProducto-> obtener_productos();
    if (!empty($arr_productos)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_productos) ; $i++) { 
            //categoria
            $id_categoria = $arr_productos[$i]->id_categoria;
            $r_categoria= $objCategoria->obtener_categoria($id_categoria);
            $arr_productos [$i] ->categoria=$r_categoria;
                //provedor
            $id_proveedor = $arr_productos[$i]->id_categoria;
            $r_categoria= $objCategoria->obtener_categoria($id_categoria);
            $arr_productos [$i] ->categoria=$r_categoria;

            //produc
            $id_Productos = $arr_productos[$i]->id;
            $producto= $arr_productos[$i]->nombre; 
            $opciones='
            <a href=" class ="btn btn-success"><i class="fa fa-pencil"></i> </a>
            ';
            $arr_productos[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_productos;
    }
    echo json_encode($arr_Respuesta);
}
if ($tipo=="ver") {
    print_r($_POST);
}
if ($tipo=="actualizar") {
    print_r($_POST);
}
if ($tipo=="eliminar") {
    print_r($_POST);
}


?>