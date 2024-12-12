<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST ['tipo'];
# instacncion ña clase model producto
$objProducto = new productoModel();
$objCategoria = new categoriaModel();
$objPersona = new personaModel();

if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Productos = $objProducto-> obtener_productos();
    if (!empty($arr_Productos)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Productos) ; $i++) {

            $id_producto = $arr_Productos[$i]->id; 
            $codigo = $arr_Productos[$i]->codigo;
            $nombre = $arr_Productos[$i]->nombre;
            $precio = $arr_Productos[$i]->precio;
            $stock = $arr_Productos[$i]->stock;
            $id_categoria = $arr_Productos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categoria($id_categoria);
            $arr_Productos[$i]->categoria=$r_categoria;
            $id_proveedor = $arr_Productos[$i]->id_proveedor;
            $r_proveedor = $objPersona->verPersona($id_proveedor);
            $arr_Productos[$i]->proveedor = $r_proveedor;
            //localhost /editarproducto/4
            $opciones='
            <a href="'.BASE_URL.'editar-producto/'.$id_producto.'" class="btn btn-warnig"> editar </a>
            <button onclick="eliminar_producto('.$id_producto.');"> eliminar </button>
            ';
            $arr_Productos[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Productos;
    }
    echo json_encode($arr_Respuesta);
}

//--------------------------------------------------------------------------------
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
        $archivo = $_FILES['imagen']['tmp_name'];
        $destino = '../assets/img_productos/';
        $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));


        $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $idproveedor ,$tipoArchivo);
        if ($arrProducto->id_n>0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            $nombre=$arrProducto->id_n. ".". $tipoArchivo;
            //cargar imagene
            if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
            } else {
                $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}

//--------------------------------------------------------------------------------
if ($tipo=="ver") {
   /*  print_r($_POST); */
   $id_producto = $_POST['id_producto'];
   $arr_Respuesta = $objProducto->verProducto($id_producto);
   //print_r($arr_Respuesta);
   if (empty($arr_Respuesta)) {
       $response = array('status' => false, 'mensaje' => "Error, no hay informacion");
   } else {
       $response = array('status' => true, 'mensaje' => "datos encontrados", 'contenido' => $arr_Respuesta);
   }
   echo json_encode($response);
}

//--------------------------------------------------------------------------------
if ($tipo=="actualizar") {

    $id_producto = $_POST['id_producto'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $categoria = $_POST['idcategoria'];
    $imagen = 'imagen';
    $proveedor = $_POST['idproveedor'];

    if ($nombre == "" || $detalle == "" || $precio == "" || $categoria == "" || $proveedor == "") {
        //repuesta
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
    } else {
        $archivo = $_FILES['imagen']['tmp_name'];
        $destino = '../assets/img_productos/';
        $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
        $arrProducto = $objProducto->actualizarProducto($id_producto, $codigo, $nombre, $detalle,$precio, $categoria, $imagen, $proveedor,$tipoArchivo);
        if ($arrProducto->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

            $nombre = $arrProducto->p_id. '.' .$tipoArchivo;
            if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
            } else {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
        }
    }
    echo json_encode($arr_Respuesta);
}

//--------------------------------------------------------------------------------
if ($tipo=="eliminar") {
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->eliminarProducto($id_producto);
    if (empty($arr_Respuesta)) {
        $response = array ('status' => false);
    } else {
        $response = array ('status' => true);
    }
    echo json_encode($response);
}


?>
