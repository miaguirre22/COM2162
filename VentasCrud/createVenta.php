<?php
include_once("conexion.php");
include_once("Modelos/Producto.php");
include_once("Modelos/Venta.php");

if (isset($_POST)) {

    $producto_id = $_POST['producto_id'];
    $cliente_id = $_POST['cliente_id'];
    $stock_vendido = $_POST['stock_vendido'];
    $precio_producto = Producto::getProductoById($producto_id)['precio'];
    $importe_total = $precio_producto * $stock_vendido;

    Venta::crear($producto_id, $cliente_id, $importe_total, $stock_vendido);

    header('Location: Vistas/viewVentas.php');
}
