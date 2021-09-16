<?php
declare(strict_types=1); //Activa el MODO ESTRICTO.
/*Declare define directivas de ejecución, SIEMPRE va al principio*/
function jump(){echo "<br />";}
//Declaraciones de tipo escalar
//Tipado estático -> Java, donde definimos el tipo de dato
//Tipado dinámico -> PHP, no se define el tipo al definir la variable.
//Fuertemente tipado -> en una variable se coloca si o si el dato que define el tipo de la variable.
//Débilmente tipado -> en una variable se puede colocar cualquier cosa.

//Toma más trabajo el tipado dinámico. Ya que el lenguaje debe procesar lo que guardamos en la variable.

//Tipo escalar -> simula el tipado estático.

//Modo coercitivo. Permite que se envie un tipo distinto y se hace la conversión.
function suma(int $a, int $b){
  return $a + $b;
}
//No convierte
var_dump(suma(1,5));
jump();
//Convierte
var_dump(suma('5',2)); //Rompe el programa

//Modo estricto
function resta(int $a, int $b){
  return $a + $b;
}
//No convierte
var_dump(resta(1,5));
jump();
//Convierte
var_dump(resta('5',2)); //Rompe el programa

//Forzar el tipo de retorno
function multi($a, $b): int {
  return $a * $b;
}
 ?>
