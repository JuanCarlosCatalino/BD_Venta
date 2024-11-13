<?php
class CategoriaModel {
    // Conexión a la base de datos
    private $conn;

    public function __construct() {
        // Aquí deberías incluir el código para establecer la conexión a la base de datos
        include 'db_connection.php';
        $this->conn = $conn;
    }

    // Función para listar categorías (ya existente)
    public function listarCategorias() {
        $query = "SELECT * FROM categorias";
        $result = $this->conn->query($query);

        $categorias = [];
        while ($row = $result->fetch_assoc()) {
            $categorias[] = $row;
        }

        return $categorias;
    }

    // Función para registrar una categoría
    public function registrarCategoria($nombre, $detalle) {
        // Consulta para insertar la nueva categoría
        $query = "INSERT INTO categorias (nombre, detalle) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $nombre, $detalle);

        if ($stmt->execute()) {
            return ['status' => true, 'mensaje' => 'Categoría registrada correctamente'];
        } else {
            return ['status' => false, 'mensaje' => 'Error al registrar la categoría'];
        }
    }
}
?>

