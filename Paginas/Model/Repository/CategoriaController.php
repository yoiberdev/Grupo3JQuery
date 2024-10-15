<?php

namespace app\Model;

use app\Interfaces\CategoriaInterface;
use app\Model\Categoria;
use PDO;

class CategoriaController extends Conexion implements CategoriaInterface
{
    public function getAll()
    {
        $sql = "SELECT * FROM categorias";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function add(Categoria $categoria)
    {
        $sql = "INSERT INTO categorias (id_categoria, nombre) VALUES (:id_categoria, :nombre)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_categoria', $categoria->getId_categoria());
        $stmt->bindParam(':nombre', $categoria->getNombre());
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
    public function update(Categoria $categoria)
    {
        $sql = "UPDATE categorias SET nombre = :nombre WHERE id_categoria = :id_categoria";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_categoria', $categoria->getId_categoria());
        $stmt->bindParam(':nombre', $categoria->getNombre());
        $stmt->execute();   
        return $this->pdo->lastInsertId();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM categorias WHERE id_categoria = :id_categoria";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_categoria', $id);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}