<?php

namespace app\Model;

class Producto
{
    private $id_producto;
    private $nombre;
    private $categoria;
    private $precio;
    private $id_categoria_producto;
    private $imagen_url;

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

    public function getId_producto()
    {
        return $this->id_producto;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getId_categoria_producto()
    {
        return $this->id_categoria_producto;
    }

    public function getImagen_url()
    {
        return $this->imagen_url;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    public function setId_producto($id_producto)
    {
        $this->id_producto = $id_producto;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function setId_categoria_producto($id_categoria_producto)
    {
        $this->id_categoria_producto = $id_categoria_producto;
    }

    public function setImagen_url($imagen_url)
    {
        $this->imagen_url = $imagen_url;
    }

}