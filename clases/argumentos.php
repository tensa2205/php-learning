<?php
function jump(){echo "<br />";}
//Argumentos de Funciones
//Argumento, lo que enviamos
//Parámetro, lo definido en el head de la función.
function suma($n1, $n2){
  echo $n1 + $n2;
}
suma(10,15);
jump();
function suma_array($arreglo){
  $resul = 0;
  foreach ($arreglo as $value) {
    $resul += $value;
  }
  echo $resul;
}

$arr = array(100,150,200,300);
suma_array($arr);

//También se puede enviar por referencia, oh yes.

function exponenciar(&$numero, $exponente){
  $numero **= $exponente;
}

$valor = 5;
jump();
exponenciar($valor, 5);
echo $valor;
jump();
//Función recursiva
function recursividad($a){
  if($a < 20){
    echo "{$a}  ";
    recursividad($a + 1);
  }
}
recursividad(1);
 ?>
