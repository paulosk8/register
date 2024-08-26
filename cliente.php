<?php
require('./persona.php');
class Cliente extends Persona
{
    public $frecuencia;
    public $correo;
    function comer()
    {
        echo "Estoy comiendo";
    }
    function beber()
    {
        echo "Estoy bebiendo";
    }
}
