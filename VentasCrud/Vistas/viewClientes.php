<?php
require_once("./Plantillas/templateHeader.php");
require_once("../Modelos/Cliente.php");
$clientes = Cliente::getClientes();
?>

<div class="container">
    <h1>Clientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">DNI</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($clientes as $cliente) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $cliente['nombre'] ?></td>
                    <td><?= $cliente['dni'] ?></td>
                    <td><a href="formEditCliente.php?id=<?php echo $cliente['id_cliente']; ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="../deleteCliente.php?id=<?php echo $cliente['id_cliente']; ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="formCreateCliente.php" class="btn btn-success">Crear Cliente</a>
    <a href="../index.php" class="btn btn-primary">Volver</a>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>