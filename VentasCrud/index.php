<?php
require_once("./Vistas/Plantillas/templateHeader.php")
?>

<div class="container">
    <h1>Sistema de Ventas</h1>
    <div class="container">
        <a type="button" class="btn btn-primary" href="./Vistas/viewProductos.php">Productos</a>
        <a type="button" class="btn btn-secondary" href="./Vistas/viewClientes.php">Clientes</a>
        <a type="button" class="btn btn-success" href="./Vistas/viewVentas.php">Ventas</a>

    </div>

</div>

<?php

require_once("./Vistas/Plantillas/templateFooter.php")

?>