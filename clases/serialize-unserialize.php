<?php

function jump(){echo "<br />";}
//Serialización y deserialización

/*
  Serialización: Permite guardar un objeto o arreglo en una BD en forma codificada.
  Deserialización: toma una variable serializada para deserializarla (la convierte en su tipo original).

  Serializar -> genera ID y serialización.

  Podemos usarla en la configuración para un diseño.
  Capaz pasar un arreglo o objeto a una vista.
*/

$array = array("Nombre" => "Diego", "Apellido" => "Borla", "Edad" => 21, "Trabajando" => true);
$cadena = serialize($array);

//a:4:{s:6:"Nombre";s:5:"Diego";s:8:"Apellido";s:5:"Borla";s:4:"Edad";i:21;s:10:"Trabajando";b:1;}
//a:2 -> array de 2 elementos
//s:6 -> string de 6 caracteres
//i -> integer
//b -> boolean
echo $cadena;
jump();
$array2 = unserialize($cadena);
var_dump($array2);
jump();

class Prueba{
  private $n1;
  private $s1;

  public function __construct($n, $s){
    $this->n1 = $n;
    $this->s1 = $s;
  }
}

$test = new Prueba(15, "hola");

$data = serialize($test);
var_dump($data);
jump();

//Podemos generar listas blancas, es decir, aquellas clases que permitiremos usar el unserialize
$whitelist = ["Prueba"];
//Usando lista blanca.
$objeto = unserialize($data, ['allowed_classes' => $whitelist]);
//No permitiendo ninguna clase.
$objeto2 = unserialize($data, ['allowed_classes' => false]);
//Permitiendo todas las clases -> más inseguro
$objeto3 = unserialize($data, ['allowed_classes' => true]);

var_dump($objeto);
jump();
 ?>
