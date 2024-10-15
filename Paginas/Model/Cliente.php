<?php

namespace app\Model;

class Cliente
{
    private $id_cliente;
    private $dni;
    private $nombres;
    private $apellido;
    private $email;
    private $telefono;
    private $direccion;

    public function __construct($id_cliente, $dni, $nombres, $apellido, $email, $telefono, $direccion)
    {
        $this->id_cliente = $id_cliente;
        $this->dni = $dni;
        $this->nombres = $nombres;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

}