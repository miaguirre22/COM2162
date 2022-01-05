<?php
// PHP Data Object
class Conexion
{
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "ventas";
    private $conexion;

    public function __construct()
    {
        try {
            // instanciamos la conexión
            $this->conexion = new PDO("mysql:host=localhost;dbname=" . $this->dbname, $this->user, $this->pass);
            // agregamos a la conexión, los posibles errores
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $err) {
            echo ("Ha ocurrido un error en la conexión: " . $err);
        }
    }

    public function getConexion(): PDO
    {
        return $this->conexion;
    }

    function conectar()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=' . $this->dbname, $this->user, $this->pass);
            // echo ("Conexión exitosa!");
        } catch (PDOException $error) {
            echo ("Error de Conexión!" . $error->getMessage());
        }
    }
}
