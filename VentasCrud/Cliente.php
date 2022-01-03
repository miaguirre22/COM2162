<?php

class Cliente
{
    private string $nombre;
    private string $email;

    public function __construct(string $nombre, string $email)
    {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}
