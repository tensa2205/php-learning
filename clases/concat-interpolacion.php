<?php
//Comillas dobles, concatenación.
$palabra = "Código";
$union = $palabra . " Facilito"; //Se usa punto para concatenar.
echo $union;
echo "<br />";
//Otra forma
$palabra .= " facilito2";
echo $palabra;
echo "<br />";
//Interpolación -> como el format de python.
$variable = "Quilmes";
echo "Bienvenido a $variable , adios";
echo "<br />";
//Otra forma
echo "Bienvenido a {$variable} , adios";
echo "<br />";

/*
  Concatenar con muchas palabras afecta al rendimiento.
  La interpolación es más rápida.
*/

//Caracteres escapados, se usan en comillas dobles y empiezan con \ (barra invertida)
/*
Algunos:
\n -> salto de linea
\t -> tabulador horizontal
\$ -> signo de dolar.
etc
*/
echo "Hola mundo \n adios";
echo "<br />";
//Comillas simples, no permiten interpolación ni caracteres escapados pero si permiten concatenar.

echo 'Bienvenido a {$variable} , adios';
echo "<br />";
?>
