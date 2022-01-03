<?php
echo ("HOLA CODO A CODO!!!");

function saludar($nombre)
{
    return "Hola, como estas " . $nombre;
}

echo (saludar("Martin"));

echo '<br>';

require_once("./objetos/Cliente.php");

$cliente1 = new Cliente("Martin", 32183882, 3794123456);

print_r($cliente1);
