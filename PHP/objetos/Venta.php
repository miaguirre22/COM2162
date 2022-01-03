<?php

require_once("./Cliente.php");
require_once("./Producto.php");

class Venta
{
    private Cliente $cliente;
    private Producto $productos;
    private float $precio;
    private string $fecha;

    public function __construct(
        Cliente $cliente,
        Producto $productos,
        float $precio,
        string $fecha
    ) {
        $this->cliente = $cliente;
        $this->precio = $precio;
        $this->fecha = $fecha;
        $this->productos = array();
    }

    
}
