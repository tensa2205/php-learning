<?php
//Require e Include, require_once y include_onde para imports
/*
  Ambos buscan mediante la ruta.
  Require si no encuentra el archivo, tira un error fatal.
  Include si no lo encuentra, arroja advertencia y sigue la ejecución.

  Que pasa con los que usan once?
  la diferencia es que si el fichero ya fue incluido, no se vuelve a incluir.

  include
  require
  include_once
  require_once -> el más seguro.
*/

//Cambiar ubicación -> seria Persona.php y Vendedor.php (quitando referencia a carpeta)
require_once 'POO/Persona.php';
require_once 'POO/Vendedor.php';
function jump(){
  echo "<br />";
}

$p1 = new Persona();
echo $p1->obtenerEdad(2000);
jump();
$p1->setNombre("Diego");
echo "Hola {$p1->getNombre()}";
jump();

//Accesos a variable estática.
echo $p1::$varStatic;
jump();
//Persona::$varStatic = 15;
echo Persona::$varStatic;
jump();

//Como uso get y set mágico?
$p1->nombre = "Juan";
echo $p1->nombre;
jump();

///////////////////////////////////////////// CLASE VENDEDOR
$vendedor = new Vendedor();
$vendedor->lluviaEstrellas();
jump();
$vendedor->obtenerEdad(1999);

 ?>
