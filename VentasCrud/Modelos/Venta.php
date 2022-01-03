<?php
include_once("../conexion.php");
require_once("Producto.php");
require_once("Cliente.php");

class Venta
{
    public static function crear($producto_id, $cliente_id, $importe_total, $stock_vendido)
    {
        try {
            $conexionBD = new Conexion();
            $query = ("INSERT INTO venta(nombre, precio, stock) VALUES (?,?,?,?, NOW());");
            // preparamos la consulta
            $sql = $conexionBD->getConexion()->prepare($query);
            $sql->execute(array($producto_id, $cliente_id, $importe_total, $stock_vendido));
        } catch (Exception $e) {
            echo ("Ha ocurrido un error: " . $e);
        }
    }

    // private Cliente $cliente;
    // private Producto $productos;
    // private float $precio;
    // private string $fecha;

    // /**
    //  * @param Cliente $cliente
    //  * @param Producto $productos
    //  * @param float $precio
    //  * @param string $fecha
    //  */
    // public function __construct(Cliente $cliente, float $precio, string $fecha)
    // {
    //     $this->cliente = $cliente;
    //     $this->precio = $precio;
    //     $this->fecha = $fecha;
    //     $this->productos = array();
    // }

    // public function addProductos(Producto $producto): void
    // {
    //     array_push($this->productos, $producto);
    //     print_r("Agregando un producto");
    // }

    // /**
    //  * @return Cliente
    //  */
    // public function getCliente(): Cliente
    // {
    //     return $this->cliente;
    // }

    // /**
    //  * @param Cliente $cliente
    //  */
    // public function setCliente(Cliente $cliente): void
    // {
    //     $this->cliente = $cliente;
    // }

    // /**
    //  * @return array|Producto
    //  */
    // public function getProductos(): array|Producto
    // {
    //     return $this->productos;
    // }

    // /**
    //  * @param array|Producto $productos
    //  */
    // public function setProductos(array|Producto $productos): void
    // {
    //     $this->productos = $productos;
    // }

    // /**
    //  * @return float
    //  */
    // public function getPrecio(): float
    // {
    //     return $this->precio;
    // }

    // /**
    //  * @param float $precio
    //  */
    // public function setPrecio(float $precio): void
    // {
    //     $this->precio = $precio;
    // }

    // /**
    //  * @return string
    //  */
    // public function getFecha(): string
    // {
    //     return $this->fecha;
    // }

    // /**
    //  * @param string $fecha
    //  */
    // public function setFecha(string $fecha): void
    // {
    //     $this->fecha = $fecha;
    // }
}
