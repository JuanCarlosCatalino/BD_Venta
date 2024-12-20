<?php
require_once "../librerias/conexion.php";

class CategoriaModel{
    private $conexion;
    function __construct()
    {
      $this->conexion= new Conexion ();  
      $this->conexion = $this->conexion ->connect();
    }

    public function obtener_categorias(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");
        while ($objeto = $respuesta->fetch_object()) {
           array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }

    public function obtener_categoria($id){
    $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE id='{$id}' ");
    $objeto = $respuesta->fetch_object();
    return $objeto;
 }


public function registrar_categoria($nombre,$detalle){
  $sql = $this->conexion->query("CALL insertcategoria('{$nombre}', '{$detalle}')");
  $sql = $sql->fetch_object();
  return $sql;
}
}
?>