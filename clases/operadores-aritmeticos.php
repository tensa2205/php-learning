<?php
$num1 = 50;
$num2 = 110;
function salto(){
  echo "<br />";
}

//suma
echo $num1 + $num2;
salto();

//resta
echo $num1 - $num2;
salto();

//multiplicacion
echo $num1 * $num2;
salto();

//division
echo $num2 / $num1;
salto();

//Modulo -> resto
echo $num1 % $num2;
salto();

//Exponenciación
echo 2 ** 4;
salto();

//Identidad y negación, operadores unarios
$dato1 = 5;
$dato2 = -10;
echo -$dato1; // -5 (- (5))-> Negación, antepone un menos.
salto();
echo +$dato2; // -10  (+ (-10))->Identidad, antepone un más.
 ?>
