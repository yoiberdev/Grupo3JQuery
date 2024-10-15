<?php

namespace app\Model;

class ProductoRepository extends Conexion
{
    public function getAllProductos()
    {
        $sql = "SELECT * FROM productos";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProducto($codigo)
    {
        $sql = "SELECT * FROM productos WHERE codigo = :codigo";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function createProducto($codigo, $producto)
    {
        $SQL = "INSERT INTO productos (id_producto, nombre, categoria, precio, id_categoria_producto, imagen_url) VALUES (:id_producto, :nombre, :categoria, :precio, :id_categoria_producto, :imagen_url)";
        $stmt = $this->pdo->prepare($SQL);
        $stmt->bindParam(':id_producto', $codigo);
        $stmt->bindParam(':nombre', $producto['nombre']);
        $stmt->bindParam(':categoria', $producto['categoria']);
        $stmt->bindParam(':precio', $producto['precio']);
        $stmt->bindParam(':id_categoria_producto', $producto['id_categoria_producto']);
        $stmt->bindParam(':imagen_url', $producto['imagen_url']);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
    
    public function updateProducto($codigo, $producto)
    {
        $SQL = "UPDATE productos SET nombre = :nombre, categoria = :categoria, precio = :precio, id_categoria_producto = :id_categoria_producto, imagen_url = :imagen_url WHERE id_producto = :id_producto";
        $stmt = $this->pdo->prepare($SQL);
        $stmt->bindParam(':id_producto', $codigo);
        $stmt->bindParam(':nombre', $producto['nombre']);
        $stmt->bindParam(':categoria', $producto['categoria']);
        $stmt->bindParam(':precio', $producto['precio']);
        $stmt->bindParam(':id_categoria_producto', $producto['id_categoria_producto']);
        $stmt->bindParam(':imagen_url', $producto['imagen_url']);
        $stmt->execute();
    }

    public function deleteProducto($codigo)
    {
        $sql = "DELETE FROM productos WHERE id_producto = :id_producto";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_producto', $codigo);
        $stmt->execute();
    }
}