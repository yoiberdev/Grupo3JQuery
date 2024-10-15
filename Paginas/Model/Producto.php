<?php

namespace app\Model;

class Producto
{
    private $codigo;
    private $producto;

    public function __construct($codigo, $producto)
    {
        $this->codigo = $codigo;
        $this->producto = $producto;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getProducto()
    {
        return $this->producto;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

}