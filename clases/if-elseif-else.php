<?php
$a = 15;
$b = 20;

function salto(){
  echo "<br />";
}

if($a > $b){
  echo "a es mayor";
}
else{
  echo "a es menor";
}
salto();

//sin llaves
$a = 25;
if($a > $b):
  echo "a es mayor";
  echo "Una línea";
else:
  echo "a es menor";
endif;
salto();
//elseif
$a = 20;
if($a > $b):
  echo "a es mayor";
elseif($a == $b):
  echo "a es igual a b";
else:
  echo "a es menor que b";
endif;
salto();
 ?>
