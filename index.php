<?php
//For-each

function jump(){
  echo "<br />";
}

$array = array(1,5,10,15,20,25,30,35,40,45,50,55);

foreach($array as $valor){
  echo $valor . " ";
}


jump();

//Y si quiero modificar mi arreglo, se antepone el & ante la variable que tomará cada valor.
$array2 = array(1,5,10,15,20,25,30,35,40,45,50,55);
foreach($array2 as &$valor2){
  $valor2 *= 2;
  echo $valor2 . " ";
}

jump();

//Y si quiero los indices
foreach ($array2 as $key => $value) {
  echo " {$key} .... {$value}";
  jump();
}

jump();
//Otra forma, poner el array directo en el foreach también juntado con el foreach sin llaves.
foreach(array(1,5,10,15,20,25,30,35,40,45,50,55) as $valor):
  echo $valor . " ";
endforeach;




 ?>
