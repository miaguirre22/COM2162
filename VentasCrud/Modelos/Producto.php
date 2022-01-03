<?php

use Producto as GlobalProducto;

include_once("../conexion.php");

class Producto
{
    public static function crear($nombre, $precio, $stock)
    {
        try {
            $conexionBD = new Conexion();
            $query = ("INSERT INTO producto(nombre, precio, stock) VALUES (?,?,?);");
            // preparamos la consulta
            $sql = $conexionBD->getConexion()->prepare($query);
            $sql->execute(array($nombre, $precio, $stock));
        } catch (Exception $e) {
            echo ("Ha ocurrido un error: " . $e);
        }
    }

    public static function getProductos()
    {
        try {
            $conexionBD = new Conexion();
            $sql = $conexionBD->getConexion()->prepare("SELECT * FROM producto;");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo ("Ha ocurrido un error: " . $e);
            return null;
        }
    }

    public function editar($id, $nombre, $precio, $stock)
    {
        try {
            $conexionBD = new Conexion();
            $query = "UPDATE producto SET nombre=?, precio=?, stock=? WHERE id_producto=?";
            $sql = $conexionBD->getConexion()->prepare($query);
            $sql->execute(array($nombre, $precio, $stock, $id));
        } catch (Exception $e) {
            echo ("Ha ocurrido un error: " . $e);
        }
    }

    public static function eliminar($id)
    {
        try {
            $conexionBD = new Conexion();
            $query = "DELETE FROM producto WHERE id_producto = ?";
            $sql = $conexionBD->getConexion()->prepare($query);
            $sql->execute(array($id));
        } catch (Exception $e) {
            echo ("Ha ocurrido un error: " . $e);
        }
    }
}

// Producto::crear("Boligrafo", "90", 50);
// echo ("<pre>");
// print_r(Producto::getProductos());
// echo ("</pre>");
