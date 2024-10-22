<?php
require_once "../librerias/conexion.php";
class ProductoModel{

    private $conexion;
    function __construct()
    {
      $this->conexion=new Conexion ();  
      $this->conexion = 
      $this->conexion ->connect();
    }

    public function registrarProducto
  ($codigo,$nombre,$detalle, $precio,$stock,$categoria,
  $imagen1,$proveedor){

    $sql = $ $this->conexion->query("CALL inserteproducto ('{$codigo}',
    '{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}',
    '{$imagen1}','{$proveedor}',");

    }
}
?>