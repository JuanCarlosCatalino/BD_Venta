<?php
require_once "../librerias/conexion.php";
class compraModel
{ # el model se comunica con el controlador y la abse de datos
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCompra($id_producto, $cantidad, $precio, $id_trabajador)
    {
        $sql = $this->conexion->query("CALL insertcompras('{$id_producto}','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
        print_r($codigo);
    }
    
}
?>



