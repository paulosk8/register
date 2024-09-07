<?php
require_once('./persona.php');
require_once('./respiracion.php');
class Proveedor extends Persona implements Respiracion
{
    private $cuenta;
    private $banco;
    function __construct()
    {
        echo "Clase inicializada";
        $this->cuenta = 1722358585;
        $this->banco = "Banco Japon";
    }
    function nariz()
    {
        echo "Paso 1: Empiezo a respirar por la nariz";
    }
    function faringe()
    {
        echo "Paso 2: Pasa el aire de la Nariz a la faringe";
    }
    function laringe()
    {
        echo "Paso 3: Pasa el aire de la faringe a la laringe";
    }
    function pulmones()
    {
        echo "Paso 4: El aire llego a los pulmones";
    }
    function cocinar()
    {
        echo "Estoy realizando una venta";
    }
    function comer()
    {
        echo "Estoy comiendo encebollado";
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
    function __destruct()
    {
        echo "Proceso destruido";
    }
}
