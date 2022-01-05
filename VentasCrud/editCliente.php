<?php
include_once("conexion.php");
include_once("Modelos/Cliente.php");

if (isset($_POST)) {

    $id_cliente = $_GET['id'];
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];

    Cliente::editar($id_cliente, $nombre, $dni);

    header('Location: Vistas/viewClientes.php');
}
