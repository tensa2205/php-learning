<?php

//var_dump muestra información de una variable solamente.

//Operadores de comparación, comparan dos valores.
$salto = "<br />";
$var1 = 15;
$var2 = "15";
//Operador == , compara solo valores y no tipo
echo $var1 == $var2;
echo $salto;
var_dump($var1 == $var2);

//Operador ===, compara valores y tipo.
echo $var1 === $var2;
echo $salto;
var_dump($var1 === $var2);

//Operador desigual != o <>
echo $salto;
var_dump($var1 != $var2);
echo $salto;
var_dump($var1 <> $var2);

//Operador no identico !== , compara tomando en cuenta el tipo y valor.
echo $salto;
var_dump($var1 !== $var2);
echo $salto;

//Operador mayor que > y menor que <, mayor o igual >=, menor o igual <=
$num1 = 15;
$num2 = 20;
var_dump($num1 > $num2);
var_dump($num1 < $num2);
var_dump($num1 >= $num2);
var_dump($num1 <= $num2);
echo $salto;

//Operador de nave espacial usando <=>
echo "Space ship";
var_dump($num1 <=> $num2); //-|
/*
Casos:
  A > B -> retorna 1.
  A = B -> retorna 0.
  A < B -> retorna -1.
*/

//Operador de elvis, si el valor de la variable evalua a verdadero, lo devuelve, sino devuelve lo otro que especifiquemos.
echo $salto;
echo $salto;
echo "Elvis";
echo $salto;
$vacio = "";
var_dump($num1?: 'No hay datos');
var_dump($vacio?: 'No hay datos');

//Operador ternario, parecido a elvis pero permite colocar un valor en caso de que sea true.
echo $salto;
echo $salto;
var_dump($num1?  'Soy true' : 'No hay datos');
var_dump($vacio? 'Soy true' : 'No hay datos');


//Operador null, funciona de la misma forma que elvis
echo $salto;
echo $salto;
$variablenula = NULL;
var_dump($num1 ?? 'No hay datos');
var_dump($variablenula ?? 'No hay datos'); //devuelve "no hay datos"
 ?>
