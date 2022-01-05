<?php
require_once("./Plantillas/templateHeader.php")
?>

<div class="container">
    <h1>Nuevo Producto</h1>
    <form action="../createProducto.php" method="POST" >
        <div class="col-auto m-1">
            <label for="nombreCliente" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreCliente" name="nombre">
        </div>
        <div class="col-auto m-1">
            <label for="precioProducto" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precioProducto" name="precio">
        </div>
        <div class="col-auto m-1">
            <label for="cantidadStock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="cantidadStock" name="stock">
        </div>
        <div class="col-auto m-1">
            <button type="submit" class="btn btn-success">Crear</button>
            <a href="viewProductos.php" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>