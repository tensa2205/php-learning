<?php
/*
  CONSIDERACIONES: ejecutar en un index
  -fijarse los paths de los require_once.
  -mirar clases Vendedor (en esta carpeta y en POO) y clase Persona: tienen comentarios sobre namespaces.
*/

/*
  Namespace -> contenedores de constantes, funciones y clases.
    Contiene los nombres.
*/

require_once 'POO/Vendedor.php';
require_once 'Controlador/Vendedor.php';

//Lo siguiente se evita el tener que usar el namespace a cada rato.
use controlador\vendedor\Vendedor;

//use poo\vendedor\Vendedor; DA ERROR, solución en línea de abajo.
use poo\vendedor\Vendedor as vender;

//Namespaces en grupo:
/*
Funcionalidad más reciente, permite agrupar los namespaces que tienen similitudes

poo\vendedor\Vendedor
poo\persona\Persona
Similitud, poo.

as apodo.
use poo\{vendedor\Vendedor as vendedores, persona\Persona as personas};
*/

//Vendedor de la carpeta controlador
$vendedor = new Vendedor();
//Vendedor de la carpeta POO
$vender = new vender();

//Los contenedores permiten cargar mismos nombres. un Namespace para cada clase!.
$vendedor->prueba();
$vender->prueba();
 ?>
