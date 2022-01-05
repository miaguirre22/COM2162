<?php
require_once("./Plantillas/templateHeader.php");
require_once("../Modelos/Cliente.php");
$cliente = Cliente::getClienteById($_GET['id']);
?>

<div class="container">
    <h1>Editar Cliente: <?php echo $cliente['nombre'] ?></h1>
    <form action="../editCliente.php?id=<?php echo $cliente['id_cliente']; ?>" method="POST">
        <div class="col-auto m-1">
            <label for="nombreCliente" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreCliente" name="nombre" value="<?php echo $cliente['nombre'] ?>">
        </div>
        <div class="col-auto m-1">
            <label for="clienteDNI" class="form-label">DNI</label>
            <input type="number" class="form-control" id="clienteDNI" name="dni" value="<?php echo $cliente['dni'] ?>">
        </div>
        <div class="col-auto m-1">
            <button type="submit" class="btn btn-success">Editar</button>
            <a href="viewClientes.php" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>

<?php
require_once("./Plantillas/templateFooter.php")
?>