<?php
//Operadores lógicos
  //and -> se usa con && o and
  //or -> se usa con || u or
  //xor -> se usa con xor, true si exactamente un operando es verdadero
  //not -> se usa con !

  // https://www.php.net/manual/es/language.operators.precedence.php

  // !!!Tener cuidado con la precedencia de operadores.

$a = 15;
$b = 22;

var_dump($a <= $b && $a > 10); //T
var_dump($a <= $b || $a > 20); //T
var_dump($a <= $b xor $a > 10); //F
var_dump($a <= $b xor $a > 25); //T
var_dump($a <= $b xor $a > 10 xor $a > 100); //F ya que dos son true.
var_dump( !($a <= $b) ); //F
 ?>
