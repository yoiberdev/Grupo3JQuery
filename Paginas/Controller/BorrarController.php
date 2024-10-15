<?php

use app\Model\ProductoRepository;

    $ProductoRepository = new ProductoRepository();

    if (isset($_GET["cod_prod"])) {
        $cod_prod = $_GET["cod_prod"];

        $curdproducto->BorrarProducto($cod_prod);

        header("Location: ../vista/lista_producto.php");
        exit();
    }