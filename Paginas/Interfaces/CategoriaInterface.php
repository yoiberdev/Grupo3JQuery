<?php

namespace app\Interfaces;

use app\Model\Categoria;

interface CategoriaInterface
{
    public function getAll();
    public function add(Categoria $categoria);
    public function update(Categoria $categoria);
    public function delete($id_categoria);
}
