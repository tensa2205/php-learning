<?php
function jump(){echo "<br />";}

//Funciones anónimas (sin un nombre)

$saludo = function($nombre){ echo "Hola {$nombre}";};

$suma = function($n1, $n2){return $n1 + $n2;};

$saludo("Diego");
jump();
echo $suma(15,2);

//Funciones variables
function saludo($saludo){
  echo "Soy la variable funcion {$saludo}";
}

jump();
$variable = 'saludo';
//PHP buscará una función con el mismo nombre almacenado en la variable.
//Una vez la encuentra, la ejecuta!!!.
echo $variable("Hola");
jump();

//Funciones internas de php
if(function_exists('xml_parser_create')):
  echo "La función existe";
else:
  echo "La función no existe";
endif;
jump();
//Lo siguiente devuelve las funciones en el módulo de xml
print_r(get_extension_funcs("xml"));
 ?>
