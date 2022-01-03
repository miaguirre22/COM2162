<?php
require_once("./Plantillas/templateHeader.php")
?>

<div class="container">
    <h1>Nuevo Cliente</h1>
    <form action="../createCliente.php" method="POST">
        <div class="col-auto m-1">
            <label for="nombreCliente" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreCliente">
        </div>
        <div class="col-auto m-1">
            <label for="clienteDNI" class="form-label">DNI</label>
            <input type="number" class="form-control" id="clienteDNI">
        </div>
        <div class="col-auto m-1">
            <label for="precioCliente" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precioCliente">
        </div>
        <div class="col-auto m-1">
            <label for="cantidadStock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="cantidadStock">
        </div>
        <div class="col-auto m-1">
            <button type="submit" class="btn btn-success">Crear Cliente</button>
            <a href="viewClientes.php" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>