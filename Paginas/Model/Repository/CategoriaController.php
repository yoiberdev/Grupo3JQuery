<?php

namespace app\Model;

use app\Interfaces\CategoriaInterfaces;

class CategoriaController extends Conexion implements CategoriaInterfaces
{
    public function getAll()
    {
        $sql = "SELECT * FROM categorias";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function add()
    {
        $sql = "INSERT INTO categorias (id_categoria, nombre) VALUES (:id_categoria, :nombre)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_categoria', $id_categoria);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
    public function update( )
    {
        $sql = "UPDATE categorias SET nombre = :nombre WHERE id_categoria = :id_categoria";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_categoria', $id_categoria);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();   
        return $this->pdo->lastInsertId();
    }
    public function delete()
    {

    }
}