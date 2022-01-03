<?php
require_once("./Plantillas/templateHeader.php");
include_once("../Modelos/Producto.php");
include_once("../Modelos/Cliente.php");
$productos = Producto::getProductos();
$clientes = Cliente::getClientes();
?>

<div class="container">
    <h1>Crear Venta</h1>

    <form action="../createVenta.php" method="POST">
        <div class="col-auto m-1">
            <select name="producto_id" id="select-producto">
                <option value="#">Seleccione el Producto</option>
                <?php foreach ($productos as $producto) : ?>
                    <option value="<?= $producto['id_producto'] ?>"><?= $producto['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-auto m-1">
            <label for="stock">Seleccione la cantidad</label>
            <input type="number" max="2" , value="" , name="stock_vendido">
        </div>

        <div class="col-auto m-1">
            <select name="cliente_id" id="select-cliente">
                <option value="#">Seleccione el Cliente</option>
                <?php foreach ($clientes as $cliente) : ?>
                    <option value="<?= $cliente['id_cliente'] ?>"><?= $cliente['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-auto m-1">
            <label for=""></label>
        </div>

        <!-- <div class="col-auto m-1">
            <label for="nombreCliente" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreCliente">
        </div>
        <div class="col-auto m-1">
            <label for="precioProducto" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precioProducto">
        </div>
        <div class="col-auto m-1">
            <label for="cantidadStock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="cantidadStock">
        </div> -->

        <div class="col-auto m-1">
            <button type="submit" class="btn btn-success">Crear Producto</button>
            <a href="../index.php" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>