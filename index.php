<?php
require_once './cliente.php';
require_once './empleado.php';
require_once './proveedor.php';

$cliente1 = new Cliente();
$cliente1->setFrecuencia("Cotidiano");
echo $cliente1->getFrecuencia();
$cliente1->comer();
$cliente1->edad = 31;
echo $cliente1->edad;

$proveedor1 = new Proveedor();
$proveedor1->colorCabello = 'rojo';
echo $proveedor1->colorCabello;

$empleado1 = new Empleado();
$empleado1->limpiar();



/* $cliente2 = new Cliente();
$cliente2->frecuencia = "Bajo";
echo $cliente2->frecuencia;
$cliente2->correo = "hola@hotmail.es";
echo $cliente2->correo;
$cliente2->colorCabello = "verde";
echo $cliente2->colorCabello;
$cliente2->comer();
$cliente2->beber();
$empleado1 = new Empleado();
$empleado1->posicion = "Primero";
echo $empleado1->posicion; */
