<?php

use app\Model\ProductoRepository;

    
    $ProductoRepository = new ProductoRepository();

    if (isset($_POST["cod_prod"])) {
        $cod_prod = $_POST["cod_prod"];

        $crudproducto->ConsultarProductoPorCodigo($cod_prod);
    }