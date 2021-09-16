<?php
function jump(){echo "<br />";}
//Return
//Se puede devolver cualquier tipo incluyendo array y object.
//Return es una sentencia opcional

function resta($n1){
  return $n1 - 10;
}

echo resta(22);
jump();

//Valores predeterminados para parámetros

function make_coffee($tipo = "Moccacino"){
  return "Haciendo cafe {$tipo}";
}

echo make_coffee();
jump();
echo make_coffee("Latte");
jump();
echo make_coffee(null);

//Los valores predeterminados se pueden usar para todos los tipos.

//Retorno de varios resultados

function flores(){
  return array("Clavel", "Morado", 15);
}
jump();
/*
 list() se utiliza para asignar una lista de variables en una sola operación.
 Es un constructor del lenguaje, al igual que array()
*/
list($fl, $co , $can) = flores();
echo "Hola soy un {$fl} , mi color es {$co} y somos {$can}";
 ?>
