<?php
require_once("./Plantillas/templateHeader.php");
require_once("../Modelos/Cliente.php");
require_once("../Modelos/Producto.php");
require_once("../Modelos/Venta.php");
$clientes = Cliente::getClientes();
$ventas = Venta::getVentas();
?>

<div class="container">
    <h1>Ventas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Producto</th>
                <th scope="col">Stock Vendido</th>
                <th scope="col">Importe Total</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($ventas as $venta) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= Cliente::getClienteById($venta['cliente_id'])['nombre'] ?></td>
                    <td><?= Producto::getProductoById($venta['producto_id'])['nombre'] ?></td>
                    <td><?= $venta['stock_vendido'] ?></td>
                    <td><?= $venta['importe_total'] ?></td>
                    <td><?= $venta['fecha'] ?></td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>

    <a href="./formCreateVenta.php" class="btn btn-success">Crear Ventas</a>
    <a href="../index.php" class="btn btn-primary">Volver</a>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>