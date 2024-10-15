<?php

use app\Model\ProductoRepository;

    $ProductoRepository = new ProductoRepository();

    if (isset($_POST["valor"])) {
        $valor = $_POST["valor"];

        $crudprodcuto->FiltrarProducto($valor);
    }