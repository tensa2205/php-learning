<?php
/*Hello world*/
echo "<p>Hola mundo</p>";
/*Variables: locales y globales. php no es fuertemente tipado*/
//LOCALES
$integer = 1;
$float = 1.5;
$booleano = true;
$arrayColores = array('Azul','Violeta','Blanco');
$string = "Hola gente";

echo $integer;
echo $float;
echo $arrayColores[0];
if($booleano){
  echo "Verdadero";
}

//GLOBALES
/*
  Las variables globales se almacenan en un arreglo que contiene todas las variables que están definidas en el ámbito global del script.
  Los nombres de las variables son las claves del array.
*/
function variablesGlobales(){
  $varLocal = "Soy una variable local";
  echo $GLOBALS["global"];
  echo $varLocal;
}

$global = "Soy una variable global";
variablesGlobales();

//Variables de tipo SUPERGLOBAL, variables internas del lenguaje disponibles siempre en todos los ámbitos.
/*
  Listado de variables superglobales:
  $GLOBALS
  $_SERVER
  $_GET
  $_POST
  $_FILES
  $_COOKIE
  $_SESSION
  $_REQUEST
  $_ENV
*/

 ?>
