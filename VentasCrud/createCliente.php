<?php
include_once("conexion.php");
include_once("Modelos/Cliente.php");

if (isset($_POST)) {

    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];

    Cliente::crear($nombre, $dni);

    header('Location: Vistas/viewClientes.php');
}


