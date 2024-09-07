<?php
abstract class Persona
{
    public $colorCabello;
    public $altura;
    public $peso;
    public $coloOjos;
    public $colorPiel;
    public $edad;
    function trabajar()
    {
        echo "Voy a trabajar";
    }
    abstract function comer();
    function dormir()
    {
        echo "Voy a dormir";
    }
    function caminar()
    {
        echo "Voy a caminar";
    }
}
