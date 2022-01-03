<?php

class Producto
{
    private int $codDeBarras;
    private string $nombreProducto;
    private string $categoria;
    private string $proveedor;
    private float $precio;
    private int $stock;

    public function __construct()
    {
        
    }
    
    public function actualizarPreico(float $porcCambio): void
    {
        $this->precio = $this->precio * (1 + $porcCambio / 100);
    }

    public function actualizarStock(int $diferencia): void
    {
        print_r("Actualizando Stock " . $diferencia);
    }

    public function vender(int $cantidad): void
    {
        print_r("Vendiendo " . $cantidad . " cantidad");
    }
}
