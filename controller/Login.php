<?php
require_once("../model/personaModel.php");

$objPersona = new PersonaModel();


$tipo = $_GET['tipo'];
if ($tipo=="iniciar_sesion") {
   // print_r($_POST);
$usuario = trim($_POST['usuario']);
$password = trim($_POST['passsword']);
$arrResponse = array ('status'=>false, 'msg'=>'');

$arrPersona = $objPersona->buscarPersonaPordni($usuario);
//print_r($arrPersona);
if (empty($arrPersona)) {
    $arrResponse = array ('status' => false, 'msg' => 'Error, Usuario no esta registrado en el sistema');


}else {
  if (password_verify($password, $arrPersona,))
}
die;

if ($tipo = "cerrar_sesion"){
    session_start()
}

?>