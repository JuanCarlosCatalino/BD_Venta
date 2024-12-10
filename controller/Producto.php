<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

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
        $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));


        $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $idproveedor ,$tipoArchivo);
        if ($arrProducto->id_n>0) {
            $newid = $arrProducto->id_n;
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            $nombre=$arrProducto->id_n. ".". $tipoArchivo;
            //cargar imagen
            if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
            } else {
                $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'Error al subir imagen');
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
           /* $id_proveedor = $arr_productos[$i]->id_categoria;
            $r_categoria= $objCategoria->obtener_proveedor($id_categoria);
            $arr_productos [$i] ->categoria=$r_categoria;*/

            //produc
            $id_Productos = $arr_productos[$i]->id;
            $producto= $arr_productos[$i]->nombre;

              //localhos/editar/producto
              $opciones = '<a href="'.BASE_URL.'Editar-producto/'.$id_producto.'">Editar</a><button onclick="eliminar_producto('.$id_producto.');">Eliminar</button>';

    
            $arr_productos[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_productos;
    }
    echo json_encode($arr_Respuesta);
}
if ($tipo=="ver") {
    /*  print_r($_POST); */
     $id_producto = $_POST['id_producto'];
     $arr_Respuesta = $objProducto->verProducto($id_producto);
     if (empty($arr_Respuesta)) {
         $response = array ('status' => false, 'mensaje' =>"Error, no hay ifno");
     } else {
         $response = array ('status' => false, 'mensaje' =>"Datos encontrados", 'contenido' =>$arr_Respuesta);
     }
     echo json_encode($response);
 }
if ($tipo == "actualizar") {
    //print_r($_POST);
    //print_r($_FILES['imagen']['tmp_name']);

    $id_producto = $_POST['id_producto'];
    $img = $_POST['img'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $categoria = $_POST['idcategoria'];
    $proveedor = $_POST['proveedor'];
    if ($nombre == "" || $detalle == "" || $precio == "" || $categoria == "" || $proveedor == "") {
        //repuesta
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
    } else {
        $arrProducto = $objProducto->actualizarProducto($id_producto, $codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $proveedor );
        if ($arrProducto->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

            if ($_FILES['imagen']['tmp_name'] != "") {
                unlink('../assets/img_productos/' . $img);

                //cargar archivos
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = '../assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
                if (move_uploaded_file($archivo, $destino . '' . $id_producto.'.'.$tipoArchivo)) {
                }
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
        }
    }
    echo json_encode($arr_Respuesta);
    print_r($_POST['']);
}
if ($tipo == "eliminar") {
     //print_r($_POST); 
     $id_producto = $_POST['id_producto'];
     $arr_Respuesta = $objProducto->eliminarProducto($id_producto);
     print_r($arr_Respuesta); // para que no salga error aveces se deve comentar este tipo de codig
 
     if (empty($arr_Respuesta)) {
         $response = array('status' => false, 'mensaje' => "error no hay info");
 
     }else {
        $response = array('status'=> true, 'mensaje'=>"datos encontraos",'contenido'=>$arr_Respuesta);
     }
     echo json_decode($arr_Respuesta);
}
?>