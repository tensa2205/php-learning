<?php
function jump(){echo "<br />";}
//Funciones
/*
  Convenciones:
    -Un nombre válido de una función comienza con una letra o guión bajo,
    seguido de cualquier cantidad de letras, números o guiones bajos.
    -Todas las funciones de PHP son de ámbito global.
    -Los nombres de funciones son case-insensitive.
    -En PHP no es posible desdefinir ni redefinir funciones previamente declaradas.
    -Usar global namespace
    -nombres largos se pueden escribir como -> suma_de_valores.
    -No usar espacios de nombres PHP y php.
    -PHP reserva todos los simbolos que comienzan con __ como mágicos. (no usar doble guión bajo)
    -En php podés definir las funciones después de llamarlas:

    nombre_funcion(); //llamado

    CODIGO ENTRE MEDIO...

    function nombre_funcion(){CODE}

    -Se pueden hacer funciones anidadas.
*/

//Forma de declarar
function name(){
  echo "Hola";
}

//anidadas

function foo(){
  function bar(){
    echo "Existo";
  }
}
//Para que bar exista, necesito ejecutar primero la función foo.
foo();
bar();


 ?>
