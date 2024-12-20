<?php
class Producto {
    public $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Obtener todos los productos
    public function getAllProductos() {
        $stmt = $this->db->prepare("SELECT * FROM producto");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); // Devuelve un array asociativo
    }

    // Obtener un producto por su ID
    public function getProductoById($id) {
        $stmt = $this->db->prepare("SELECT * FROM producto WHERE idproducto = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function createProducto($nombre, $descripcion, $precio, $stock, $fecha_registro, $image_path) {
        // Preparar la consulta SQL para insertar un nuevo producto
        $stmt = $this->db->prepare("INSERT INTO producto (nombre, descripcion, precio, stock, fecha_registro, image_path) VALUES (?, ?, ?, ?, ?, ?)");
    
        // Vincular los parámetros a la consulta SQL
        $stmt->bind_param("ssdiss", $nombre, $descripcion, $precio, $stock, $fecha_registro, $image_path);
    
        // Ejecutar la consulta
        return $stmt->execute();
    }
    
    

    // Actualizar un producto
    public function updateProducto($id, $nombre, $descripcion, $precio, $stock, $image_path) {
        // Primero, obtenemos el producto existente para conservar la imagen actual si no se proporciona una nueva
        $productoExistente = $this->getProductoById($id);

        // Verificamos si se ha proporcionado una nueva imagen, de lo contrario, mantenemos la existente
        if (empty($image_path)) {
            $image_path = $productoExistente['image_path']; // Mantener la imagen existente
        }

        // Preparar la consulta SQL para actualizar el producto
        $stmt = $this->db->prepare("UPDATE producto SET nombre = ?, descripcion = ?, precio = ?, stock = ?, image_path = ? WHERE idproducto = ?");
        $stmt->bind_param("ssdisi", $nombre, $descripcion, $precio, $stock, $image_path, $id);

        // Ejecutar la consulta
        return $stmt->execute();
    }

    // Eliminar un producto
    public function deleteProducto($id) {
        $stmt = $this->db->prepare("DELETE FROM producto WHERE idproducto = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
