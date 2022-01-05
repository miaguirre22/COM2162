<?php
require_once("./Plantillas/templateHeader.php");
require_once("../Modelos/Producto.php");
$producto = Producto::getProductoById($_GET['id']);
?>

<div class="container">
    <h1>Editar Producto: <?php echo $producto['nombre']; ?> </h1>
    <form action="../editProducto.php?id=<?php echo $producto['id_producto']; ?>" method="POST" >
        <div class="col-auto m-1">
            <label for="nombreCliente" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreCliente" name="nombre" value="<?php echo $producto['nombre']; ?>">
        </div>
        <div class="col-auto m-1">
            <label for="precioProducto" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precioProducto" name="precio" value="<?php echo $producto['precio']; ?>">
        </div>
        <div class="col-auto m-1">
            <label for="cantidadStock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="cantidadStock" name="stock" value="<?php echo $producto['stock']; ?>">
        </div>
        <div class="col-auto m-1">
            <button type="submit" class="btn btn-success">Editar</button>
            <a href="viewProductos.php" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>