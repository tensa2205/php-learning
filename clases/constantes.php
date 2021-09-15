<?php
//CONSTANTES
/*
  No llevan $, a partir de PHP 5.3 se usa la palabra clave const para definirlas (sino DEFINE). No pueden ser redefinidas ni eliminadas al definirse.
  Tienen nombre en mayúscula
*/

//Usando const
const CONSTANTE = "Soy una constante";
echo CONSTANTE . "<br />";
const NUMERO = 1;
echo NUMERO ."<br />";
const ARREGLO = array(1,2,3,4,5);
echo ARREGLO[3] ."<br />";

//Usando define
define("CONSTANTE2", "Soy una constante definida con define");
define("NUMERO2", 15);
define("ARREGLO2", array(6,7,8,9,10));

echo CONSTANTE2 ."<br />";

//CONSTANTES PREDEFINIDAS en el núcleo de PHP, son muchas.
echo PHP_INT_MIN;
//Existen constantes predefinidas mágicas, que pueden cambiar su valor.
/*
__LINE__      -> número de línea actual en el fichero
__DIR__       -> ruta completa y nombre del fichero con enlaces simbólicos resueltos.
__FUNCTION__  -> nombre de la función
__CLASS__     -> nombre de la clase.
__TRAIT__     -> nombre del trait.
__METHOD__    -> nombre del método de la clase.
__NAMESPACE__ -> nombre del espacio de nombres actual.
*/
 ?>
