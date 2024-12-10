<?php
require_once "../librerias/conexion.php";
class ProductoModel{

    private $conexion;
    function __construct()
    {
      $this->conexion= new Conexion ();  
      $this->conexion = $this->conexion ->connect();
    }

    public function obtener_productos(){
      $arrRespuesta = array();
      $respuesta = $this->conexion->query("SELECT * FROM producto");
      while ($objeto = $respuesta->fetch_object()) {
         array_push($arrRespuesta,$objeto);
      }
      return $arrRespuesta;
  }


    public function registrarProducto($codigo,$nombre,$detalle, $precio,$stock,$idcategoria,$imagen,$idproveedor,$tipoArchivo){
    $sql = $this->conexion->query("CALL insertproducto('{$codigo}',
    '{$nombre}','{$detalle}','{$precio}','{$stock}','{$idcategoria}',
    '{$imagen}','{$idproveedor}','{$tipoArchivo}')");
    $sql = $sql->fetch_object();
    return $sql;
    print_r($codigo);

  }
    public function actualizar_imagen($id,$imagen){
      $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' where id='{´$id}'");
    }


    // es de esditar producto
    public function verProducto($id){
      $sql = $this->conexion->query("SELECT * FROM producto WHERE id='$id'");
      $sql = $sql->fetch_object();
      return $sql;

    }
// aqui falta arreglar en los procedimientos y borrar
public function actualizarProducto($id, $nombre, $detalle, $precio, $categoria, $proveedor){
  $sql = $this->conexion->query("CALL actualizarproducto('{$id}','{$nombre}','{$detalle}','{$precio}','{$categoria}','{$proveedor}')");
  $sql = $sql->fetch_object();
  return $sql;
    }

    public function eliminarProducto($id){
      $sql = $this->conexion->query("CALL eliminarproducto('{$id}')");
      $sql =$sql->fetch_object(); 
      return $sql;
  }

  }

?>