<?php
require_once "../librerias/conexion.php";
class ProductoModel{

    private $conexion;
    function __construct()
    {
      $this->conexion= new Conexion ();  
      $this->conexion = 
      $this->conexion ->connect();
    }

    public function registrarProducto($codigo,$nombre,$detalle, $precio,$stock,$idcategoria,
  $imagen,$idproveedor){
    $sql = $this->conexion->query("CALL insertproducto('{$codigo}',
    '{$nombre}','{$detalle}','{$precio}','{$stock}','{$idcategoria}',
    '{$imagen}','{$idproveedor}')");
    $sql = $sql->fetch_object();
    return $sql;

    }
}
?>