<?php

namespace app\Interfaces;

use app\Model\Cliente;

interface ClienteInterface
{
    public function getAll();
    public function add(Cliente $cliente);
    public function update(Cliente $cliente);
    public function delete($id_cliente);
}