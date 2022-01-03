<?php
require_once("./Plantillas/templateHeader.php");
require_once("../Modelos/Cliente.php");
$clientes = Cliente::getClientes();
?>

<div class="container">
    <h1>Ventas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Stock</th>
                <th scope="col">Importe</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Juna Carlos</td>
                <td>Monitor</td>
                <td>2</td>
                <td>$80.000</td>
                <td>25/11/2021</td>
            </tr>
        </tbody>
    </table>

    <a href="./formCreateVenta.php" class="btn btn-success">Crear Ventas</a>
    <a href="../index.php" class="btn btn-primary">Volver</a>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>