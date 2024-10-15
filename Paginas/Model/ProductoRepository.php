<?php

namespace app\Model;

class ProductoRepository extends Conexion
{
    public function getProducto($codigo)
    {
        $sql = "SELECT * FROM productos WHERE codigo = :codigo";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        return $stmt->fetch();
    }
}