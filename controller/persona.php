<?php

require_once ('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
$objPersona = new PersonaModel();



    if ($tipo == "registrar") { 
        //print_r($_POST);
        //echo $_FILES['imagen']['name'];

        if ($_POST) 
            // Obtener datos del formulario
            $nro_identidad = $_POST['nro_identidad'];
            $razon_social = $_POST['razon_social'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $departamento = $_POST['departamento'];
            $provincia = $_POST['provincia'];
            $distrito = $_POST['distrito'];
            $direccion = $_POST['direccion'];
            $codigo_postal = $_POST['cod_postal'];
            $rol = $_POST['rol'];
            $password = $_POST['password'];
            $estado = $_POST['estado'];
            $fecha_registro = $_POST['fecha_reg'];

            $secure_password = password_hash($nro_identidad,PASSWORD_DEFAULT);
            // Validación para campos vacíos
if ($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo=="" || $departamento=="" || $provincia=="" || $distrito=="" || $direccion=="" || $cod_postal=="" || $rol=="" || $password=="" || $estado=="" || $fecha_reg=="") {
    $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
} else {
    // Aquí puedes agregar la lógica para registrar la persona en la base de datos
    $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $direccion, $cod_postal, $rol, $secure_password, $estado, $fecha_reg);

    // Verificar si el registro fue exitoso
    if ($arrPersona->id > 0) {
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso');
    } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
    }
    echo json_encode($arr_Respuesta);
}

    }
?>
