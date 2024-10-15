<?php
$ruta = "../../..";
$titulo = "aplicacion de ventas - Lista de categoria";
include("../../Includes/cabecera.php");
?>
<?php
include("../../Includes/menu.php");
?>
<div>
    <h1>Categoria</h1>
</div>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody id="categoria-body">
            
        </tbody>
    </table>
</div>
<?php
include("../../Includes/piedepagina.php");
?>