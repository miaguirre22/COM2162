<?php

use Cliente as GlobalProducto;

include_once("../conexion.php");

class Cliente
{
    public static function crear($nombre, $dni)
    {
        try {
            $conexionBD = new Conexion();
            $query = ("INSERT INTO cliente(nombre, dni) VALUES (?,?,?);");
            // preparamos la consulta
            $sql = $conexionBD->getConexion()->prepare($query);
            $sql->execute(array($nombre, $dni));
        } catch (Exception $e) {
            echo ("Ha ocurrido un error: " . $e);
        }
    }

    public static function getClientes()
    {
        try {
            $conexionBD = new Conexion();
            $sql = $conexionBD->getConexion()->prepare("SELECT * FROM cliente;");
            $sql->execute();

            return $sql->fetchAll();
        } catch (Exception $e) {
            echo ("Ha ocurrido un error: " . $e);
        }
    }

    public function editar($id, $nombre, $dni)
    {
        try {
            $conexionBD = new Conexion();
            $query = "UPDATE cliente SET nombre=?, dni=? WHERE id_cliente=?";
            $sql = $conexionBD->getConexion()->prepare($query);
            $sql->execute(array($nombre, $dni, $id));
        } catch (Exception $e) {
            echo ("Ha ocurrido un error: " . $e);
        }
    }
}
