<?php
require_once "../librerias/conexion.php";
class personaModel
{  
    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password, $fecha_reg){   
        $sqla = $this->conexion->query("CALL insertpersona('{$nro_identidad}','{$razon_social}', '{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$password}','{$fecha_reg}')");
        $sqlll = $sqla->fetch_object();
        return $sqlll;
    }

    public function buscarpersonapordni($nro_identidad){
        $sql = $this->conexion->query("SELECT*FROM persona WHERE nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtener_proveedor()
    {
        $arrRespuesta = array();
        // Consulta  tabla persona para obtener los proveedores
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'proveedor'");
        
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        
        return $arrRespuesta;
    }
  
    public function obtener_personas()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM persona");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
            
        }
        return $arrRespuesta;
    }
    public function verPersona($id){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE id ='$id'");
        $sql =$sql->fetch_object(); 
        return $sql;
        
    }
    public function actualizarPersona($id, $nombre, $detalle, $precio, $categoria, $fecha_v, $proveedor){
        $sql = $this->conexion->query("CALL actualizarproducto('{$id}','{$nombre}','{$detalle}','{$precio}','{$categoria}','{$proveedor}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function eliminarPersona($id){
        $sql = $this->conexion->query("CALL eliminarpersona('{$id}')");
        $sql =$sql->fetch_object(); 
        return $sql;
        
    }
}

