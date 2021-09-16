<?php
function jump(){echo "<br />";}


//Array numérico indexado -> el array de siempre accesible con valores desde 0 hasta longitud-1
$color = "Morado";
$arrayIndexado = array(1,2,"hola",$color);
for($i = 0; $i < count($arrayIndexado); $i++):
  echo $arrayIndexado[$i] . " ";
endfor;

//Array asociativo, mismo concepto que diccionarios en Python.
//key -> value

$arrayAsociativo = array('Nombre' => 'Juan', 'Apellido' => 'Garcia', 'Edad' => 25);

//obtener valor
echo $arrayAsociativo['Nombre'];
//Inserción de llave, igual que python
$arrayAsociativo['Altura'] = 1.85;
echo $arrayAsociativo['Altura'];

jump();

//Recorrerlo en pares clave-valor
foreach ($arrayAsociativo as $key => $value) {
  echo "Clave: {$key} -----> Valor: {$value}";
  jump();
}
?>
