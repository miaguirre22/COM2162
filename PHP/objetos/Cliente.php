<?php

class Cliente
{
    // Atributos o propiedades
    private int $nroSocio;
    private string $nombre;
    private int $dni;
    private int $telefono;
    private string $correo;
    private string $direccion;
    private string $condFrenteIVA;
    private bool $afiliado;

    // Metodo constructor
    public function __construct(int $nroSocio, string $nombre, int $dni)
    {
        $this->nroSocio;
        $this->nombre = $nombre;
        $this->dni = $dni;
    }

    // Metodos (responsabilidades)
    public function pagar()
    {
        print_r("Cliente " . $this->nombre . " pagando...");
    }

    public function devolver()
    {
        print_r("Cliente " . $this->nombre . " devolviendo...");
    }
}
