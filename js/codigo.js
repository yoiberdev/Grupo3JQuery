// Iniciar los eventos JQuery
$(function() {

    $(".reg_producto .btn_mostrar").click(function(e) {
        let codprod = $(this).closest(".reg_producto").children(".codprod").text();

        location.href = "mostrar_producto-php?codprod=" + codprod;
    });
    
});

// Evento click del boton editar de la pagina listar_producto.php
$(".reg_producto .btn_editar").click(function(e) {
    let codprod = $(this).closest(".reg_producto").children(".codprod").text();

    location.href = "editar_producto.php?codprod=" + codprod;
});

// Evento click del boton borrar de la pagina listar_producto.php
$(".reg_producto .btn_borrar").click(function(e) {
    let codprod = $(this).closest(".reg_producto").children(".codprod").text();
    let prod = $(this).closest(".reg_producto").children(".codprod").text();

    $("#md_borrar .lbl_codprod").text(codprod);
    $("#md_borrar .lbl_prod").text(prod);

    $("#md_borrar .btn_borrar").attr("href", "../controlador/ctr_borrar_prod.php?codprod=" + codprod);

    $("#md_borrar").modal("show");
});

// Evento focusout (perder el enfoque) del cuadro de texto de la pagina consultar_producto.php
$("#frm _consultar_prod #txt_codprod").focusout(function(e){
    e.preventDefault();
    // Capturar el valor ingresado en el cuadro de texto
    let codprod = $(this).val();

    if (codprod !="") {
        // Implementar la consulta por medio de AJAX para JQuery
        $.ajax({
            url: "../controlador/ctr_consultar_prod.php",
            type: "POST",
            data: {codprod: codprod},
            success: function(rpta) {
                let rp = JSON.parse(rpta);
                
                if (rp) {
                    $(".prod").html(rp.producto);
                    $(".stk").html(rp.stock_disponible);
                    $(".cst").html("S/ " + rp.costo);
                } else {
                    alert("El codigo " + codprod + " no existe");

                    $("#txt_codprod").val("");

                    let vacio = "&nbsp;";

                    $(".prod").html(vacio);
                    $(".stk").html(vacio);
                    $(".cst").html(vacio);

                    $("#txt_codprod").focus();
                }
            }
        });
    }
});

// Evento click del boton filtrar de la pagina filtrar_producto.php
$("#frm_filtrar_prod #btn_filtrar").on("click", function(e) {
    e.preventDefault();

    var valor = $("#txt_valor").val();

    if(valor != ""){
        $.post("../controlador/ctr_filtrar_prod.php",
        {valor : valor},
        function(rpta){
            $("#tabla").html(rpta);    
        });
    } else {
        $("#tabla").html("");

        alert("Escriba un valor para filtrar...");

        $("#txt_valor").focus();    
    }
});

$(document).ready(function() {
    $.ajax({
        url: '../controlador/ctr_listar_categorias.php',
        method: 'GET',
        success: function(data) {
            // Suponiendo que data es un arreglo de objetos
            data.forEach(function(item) {
                $('#categoria-body').append('<tr><th scope="row">' + item.id + '</th><td>' + item.categoria + '</td></tr>');
            });
        },
        error: function(xhr, status, error) {
            $('#categoria-body').append('<tr><td colspan="2" class="text-danger">Error al cargar los datos: ' + error + '</td></tr>');
        }
    });
});