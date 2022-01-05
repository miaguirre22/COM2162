<?php
include_once("conexion.php");
include_once("Modelos/Producto.php");

if (isset($_GET)) {

    $id_producto = $_GET['id'];

    Producto::eliminar($id_producto);

    header('Location: Vistas/viewProductos.php');
}
