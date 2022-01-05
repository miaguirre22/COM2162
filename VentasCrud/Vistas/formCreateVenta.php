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
            <select name="producto_id" id="select-producto" onchange="precioProducto()">
                <option value="#">Seleccione el Producto</option>
                <?php foreach ($productos as $producto) : ?>
                    <option value="<?= $producto['id_producto'] ?>"><?= $producto['nombre'] . " $" . $producto['precio'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-auto m-1">
            <label for="stock">Seleccione la cantidad</label>
            <input type="number" max="10" min="1" value="" name="stock_vendido">
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
            <button type="submit" class="btn btn-success">Crear</button>
            <a href="viewVentas.php" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>

<script>
    // function precioProducto() {
    //     var seleccion = document.getElementById('select-producto');
    //     // <?php 
    //     //     $prod = Producto::getProductoById()
    //     // ?>
    //     console.log("productos: ", productos)
    //     console.log("id producto seleccionado: ", seleccion.selectedIndex)
    //     // document.getElementById('text1').value = seleccion.selectedIndex;
    //     // document.getElementById('text2').value = seleccion.options[seleccion.selectedIndex].text;
    //     // document.getElementById('text3').value = seleccion.options[seleccion.selectedIndex].value;
    // }
</script>

<?php
require_once("./Plantillas/templateFooter.php")
?>