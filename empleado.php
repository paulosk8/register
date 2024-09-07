<?php
require_once('./persona.php');
class Empleado extends Persona
{
    private $posicion;
    private $calendario;
    function limpiar()
    {
        echo "Estoy limpiando";
    }
    function comer()
    {
        echo "Estoy comiendo soy empleado";
    }

    public function getPosicion()
    {
        return $this->posicion;
    }
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    }



    public function setCalendario($calendario)
    {
        $this->calendario = $calendario;

        return $this;
    }
    public function getCalendario()
    {
        return $this->calendario;
    }
}
