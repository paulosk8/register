<?php
require_once('./persona.php');
class Proveedor extends Persona
{
    private $cuenta;
    private $banco;
    function cocinar()
    {
        echo "Estoy realizando una venta";
    }

    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }
    public function getCuenta()
    {
        return $this->cuenta;
    }


    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }
    public function getBanco()
    {
        return $this->banco;
    }
}
