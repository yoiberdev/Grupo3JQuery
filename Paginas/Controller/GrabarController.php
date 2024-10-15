<?php

use app\Model\Producto;
use app\Model\ProductoRepository;

    $ProductoRepository = new ProductoRepository();

    if (isset($_POST["btn_registrar"])) {
        $producto = new Producto(
        $producto->codigo_producto = $_POST["txt_cod_prod"],
        $producto->producto = $_POST["txt_prod"],
        $producto->stock_disponible = $_POST["txt_stk"],
        $producto->costo = $_POST["txt_cst"],
        $producto->ganancia = $_POST["txt_gnc"] / 100,
        $producto->producto_codigo_marca = $_POST["cbo_cod_mar"],
        $producto->producto_codigo_categoria = $_POST["cbo_cod_cat"]
        );
        $tipo = $_POST["txt_tipo"];

        if ($tipo == "r")
            $crudproducto->RegistrarProducto($producto);
        else if ($tipo == "e")
            $crudproducto->EditarProducto($producto);

        header("location: ../vista/listar_producto.php");
    }