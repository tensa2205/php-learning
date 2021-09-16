<?php
function jump(){echo "<br />";}
//Matrices -> array multidimensional.
//Puede ser asociativo o indexado, inclusive ambas.

//Como hacerla, array multidimensional indexado
$personas = array(
  array("Juan", "Molina", 22),
  array("Juan", "Roman", 40),
  array("Melina", "Pospus", 25),
  array("Alicia", "Wonderland", 150)
);

//Obtener un valor
echo $personas[3][1];

jump();

for($f = 0; $f < count($personas); $f++){
  for($c = 0; $c < count($personas[$f]) ; $c++){
    echo $personas[$f][$c] . " ";
  }
  jump();
}

//Multidimensional mixto, es decir, indexado-asociativo
//Una clave tiene asociada un array.
$mixto = array(
  'A' => array("0", "0", "0"),
  'B' => array("1", "0", "0"),
  'C' => array("0", "1", "0"),
  'D' => array("0", "0", "1")
);

echo $mixto['B'][0];
jump();
//Recorrido
foreach ($mixto as $key => $value) {
  for($c = 0 ; $c < count($value) ; $c++){
    echo "Coordenadas -> {$key}  -  {$c}  Valor ->  {$value[$c]} ; ";
    echo "       ";
  }
  jump();
}


 ?>
