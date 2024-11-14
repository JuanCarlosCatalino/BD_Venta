<?php
require_once "../librerias/conexion.php";

class CompraModel {
    private $conexion;
    
    function __construct() {
        $this->conexion = new Conexion();  
        $this->conexion = $this->conexion->connect();
    }

    public function registrar_compra($id_producto, $cantidad, $precio, $id_trabajador) {
        // Usar un procedimiento almacenado para insertar los datos
        $sql = $this->conexion->query("CALL InsertCompra('{$id_producto}', '{$cantidad}', '{$precio}', '{$id_trabajador}')");
        
        // Fetch del resultado de la consulta si es necesario
        $resultado = $sql->fetch_object();
        
        return $resultado;
    }
}
?>



