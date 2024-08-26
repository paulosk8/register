<?php
require_once('./persona.php');
class Proveedor extends Persona
{
    public $cuenta;
    public $banco;
    function cocinar()
    {
        echo "Estoy cocinando";
    }
}
