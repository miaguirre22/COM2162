<?php
require_once("./Plantillas/templateHeader.php");
require_once("../Modelos/Producto.php");
$productos = Producto::getProductos();
?>

<div class="container">
    <h1>Productos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($productos as $producto) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td><?= $producto['stock'] ?></td>
                    <td><a href="#" class="btn btn-primary">Editar</a></td>
                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="formCreateProducto.php" class="btn btn-success">Crear Producto</a>
    <a href="../index.php" class="btn btn-primary">Volver</a>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>