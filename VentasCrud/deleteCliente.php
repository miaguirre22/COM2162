<?php
include_once("conexion.php");
include_once("Modelos/Cliente.php");

if (isset($_GET)) {

    $id_cliente = $_GET['id'];

    Cliente::eliminar($id_cliente);

    header('Location: Vistas/viewClientes.php');
}
