<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST ['tipo'];
# instacncion ña clase model producto
$objPersona = new personaModel();

if ($tipo=="registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];
    
     if($_POST);
    $nro_identidad= $_POST['nro_identidad'];
    $razon_social= $_POST['razon_social'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $departamento= $_POST['departamento'];
    $provincia= $_POST['provincia'];
    $distrito= $_POST ['distrito'];
    $cod_postal= $_POST['cod_postal'];
    $direccion= $_POST['direccion'];
    $rol= $_POST['rol'];
    $fecha_reg= $_POST['fecha_reg'];

    $secure_password = password_hash($nro_identidad,PASSWORD_DEFAULT);
    
    if ($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo==""|| $departamento==""|| $provincia=="" || $distrito=="" || $cod_postal==""|| $direccion==""|| $rol==""|| $secure_password==""|| $fecha_reg=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrPersona= $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono,$correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $secure_password, $fecha_reg);
        if ($arrPersona->id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //car}gar archivos
        
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SREGISTRAR persona');
        }
        echo json_encode($arr_Respuesta);
    } 
}


if ($tipo=="listarproveedor") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Proveedor = $objPersona-> obtener_proveedor();
    if (!empty($arr_Proveedor)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Proveedor) ; $i++) { 
            $id_Proveedor = $arr_Proveedor[$i]->id;
            $razon_social = $arr_Proveedor[$i]->razon_social; 
            $opciones='
            ';
            $arr_Proveedor[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Proveedor;
    }
    echo json_encode($arr_Respuesta);
}


 if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Persona = $objPersona-> obtener_personas();
    if (!empty($arr_Persona)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Persona) ; $i++) { 
            $id_persona = $arr_Persona[$i]->razon_social;
            $persona = $arr_Persona[$i]->id; 
            $opciones='
            <a href="'.BASE_URL.'editar-persona/'.$id_persona.'" class="btn btn-warnig"> editar </a>
            <button onclick="eliminar_persona('.$id_persona.');"> eliminar </button>
            
            ';
            $arr_Persona[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Persona;
    }
    echo json_encode($arr_Respuesta);
} 
if ($tipo=="ver") {
    /*  print_r($_POST); */
     $id_persona = $_POST['id_persona'];
     $arr_Respuesta = $objPersona->verPersona($id_persona);
     if (empty($arr_Respuesta)) {
         $response = array ('status' => false, 'mensaje' =>"Error, no hay ifno");
 
     } else {
         $response = array ('status' => false, 'mensaje' =>"Datos encontrados", 'contenido' =>$arr_Respuesta);
     }
     echo json_encode($response);
 }
 if ($tipo=="actualizar") {
       $id_persona = $_POST['id_producto'];
       $nro_identidad= $_POST['nro_identidad'];
       $razon_social= $_POST['razon_social'];
       $telefono= $_POST['telefono'];
       $correo= $_POST['correo'];
       $departamento= $_POST['departamento'];
       $provincia= $_POST['provincia'];
       $distrito= $_POST ['distrito'];
       $cod_postal= $_POST['cod_postal'];
       $direccion= $_POST['direccion'];
       $rol= $_POST['rol'];
     if ($nombre == "" || $detalle == "" || $precio == "" || $categoria == "" || $proveedor == "") {
         //repuesta
         $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
     } else {
         $arrProducto = $objProducto->actualizarProducto($id_producto, $codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $idproveedor );
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
     $id_producto = $_POST['id_persona'];
     $arr_Respuesta = $objProducto->verPersona($id_persona);
     if (empty($arr_Respuesta)) {
         $response = array ('status' => false, 'mensaje' =>"Error, no hay ifno");
     } else {
         $response = array ('status' => false, 'mensaje' =>"Error, no hay ifno");
     }
     
 }
 if ($tipo=="eliminar") {
    $id_persona = $_POST['id_persona'];
    $arr_Respuesta = $objPersona->eliminarPersona($id_persona);
    if (empty($arr_Respuesta)) {
        $response = array ('status' => false);
    } else {
        $response = array ('status' => true);
    }
    echo json_encode($response);
}

 


