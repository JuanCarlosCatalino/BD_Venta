<?php
require_once "../librerias/conexion.php";

class PersonaModel {

    private $conexion;
    function __construct() 
    {
        $this->conexion = new Conexion();  
        $this->conexion = $this->conexion->connect();
    }

    // Función para registrar una persona
    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, 
                                      $departamento, $provincia, $distrito, $direccion, 
                                      $cod_postal, $rol, $password, $estado, $fecha_reg) {
        $sql = $this->conexion->query("CALL insertpersona('{$nro_identidad}', '{$razon_social}','{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', 
        '{$distrito}', '{$direccion}', '{$cod_postal}', '{$rol}','{$password}', '{$estado}', '{$fecha_reg}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function buscarPersonaPordni($nro_identidad){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtener_proveedores(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM persona where rol='proveedor'");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
    public function obtener_persona(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM persona");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
    
}
?>

