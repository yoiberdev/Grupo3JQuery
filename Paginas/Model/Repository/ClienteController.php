<?php

namespace app\Model;

use app\Interfaces\ClienteInterface;
use PDO;

class ClienteController extends Conexion implements ClienteInterface
{
    public function getAll()
    {
        $sql = "SELECT * FROM clientes";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function add(Cliente $cliente)
    {
        $sql = "INSERT INTO clientes (id_cliente, dni, nombres, apellido, email, telefono, direccion) VALUES (:id_cliente, :dni, :nombres, :apellido, :email, :telefono, :direccion)";
        $stmt = $this->pdo->prepare($sql);      
        $stmt->bindParam(':id_cliente', $cliente->getId_cliente());
        $stmt->bindParam(':dni', $cliente->getDni());
        $stmt->bindParam(':nombres', $cliente->getNombres());
        $stmt->bindParam(':apellido', $cliente->getApellido());
        $stmt->bindParam(':email', $cliente->getEmail());
        $stmt->bindParam(':telefono', $cliente->getTelefono()); 
        $stmt->bindParam(':direccion', $cliente->getDireccion());
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
    public function update(Cliente $cliente)
    {
        $sql = "UPDATE clientes SET dni = :dni, nombres = :nombres, apellido = :apellido, email = :email, telefono = :telefono, direccion = :direccion WHERE id_cliente = :id_cliente";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_cliente', $cliente->getId_cliente());
        $stmt->bindParam(':dni', $cliente->getDni());
        $stmt->bindParam(':nombres', $cliente->getNombres());
        $stmt->bindParam(':apellido', $cliente->getApellido());
        $stmt->bindParam(':email', $cliente->getEmail());
        $stmt->bindParam(':telefono', $cliente->getTelefono());
        $stmt->bindParam(':direccion', $cliente->getDireccion());
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM clientes WHERE id_cliente = :id_cliente";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_cliente', $id);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}