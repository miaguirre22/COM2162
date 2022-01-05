<?php
include_once("conexion.php");
include_once("Modelos/Producto.php");

if (isset($_POST)) {

    $id_producto = $_GET['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    Producto::editar($id_producto, $nombre, $precio, $stock);

    header('Location: Vistas/viewProductos.php');
}
