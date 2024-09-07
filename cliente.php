<?php
require_once('./persona.php');
class Cliente extends Persona
{
    private $frecuencia;
    private $correo;
    function comer()
    {
        echo "Estoy comiendo";
    }
    function beber()
    {
        echo "Estoy bebiendo";
    }

    public function setFrecuencia($frecuencia)
    {
        $this->frecuencia = $frecuencia;
    }
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }


    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
}
