<?php
//Conversión de tipos

//Conversión a enteros
  echo "Conversiones integer" . "<br />";
  //Contexto: el tipo de la variable se define en base al contexto de uso.
  $variable = "20 hola mundo";
  //Hace la conversión de variable en base al contexto, en este caso automáticamente se convierte a un entero.
  //IMPORTANTE: el número DEBE ir al inicio del string, sino no lo toma.
  $suma = 20 + $variable;
  echo $suma . "<br />";
  echo gettype($suma) . "<br />";


  //Conversión mediante Forzado de tipos: remarcar -> si el valor está al final, lo toma como cero.
  $entero = (int)$variable; //Convierte forzadamente a entero el valor de variable.
  echo $entero . "<br />";
  //Los booleanos: true es 1, false es 0.
  //Float: redondea el valor.

  //Conversión mediante Función
  $funcion =intval($variable);
  echo $funcion . "<br />";

//La conversión a Float o double se hace igual que con los enteros pero especificando valor float/double.
  //Forzado de tipo -> (float)variable;
  //Usando función -> floatval(variable);

//Conversión de tipo booleano, tiene dos formas -> forzado de tipo y función
  echo "Conversiones bool" . "<br />";
  $booleano = (bool)$variable; //(boolean) también es válido
  $variableFalse = "";
  $booleanoFunc = boolval($variableFalse);
  echo $booleano . "<br />";
  echo $booleanoFunc . "<br />"; //No imprime nada xq es false.


//Conversión a tipo array.
  //Función explode
  echo "Conversiones array" . "<br />";
  $numeros = "1,2,3,4,5,6,7";
  $arrayNumeros = explode("," , $numeros, 5 ); //explode(DELIMITADOR, VARIABLECONVERTIR, MÁXIMO ELEMENTOS)
  //Sobre MÁXIMO ELEMENTOS -> si el string excede el máximo impuesto, el último elemento del array contendrá el resto del string.
  foreach ($arrayNumeros as $value) {
    echo $value . "<br />";
  }

  //Usando el tipo Forzado
  $arrayNumeros2 = (array)$numeros;
  echo  "<br />" . "<br />";
  //Guardó TODOS los elementos en la posición cero. Then, es mejor el explode.
  echo $arrayNumeros2[0] . "<br />";

  //DE ARRAY A STRING
  $arrayColores = array("Red", "Blue", "Yellow");
  $string = implode(" - ", $arrayColores); //implode(SEPARADOR,VARIABLEARRAY)
  echo $string . "<br />";
 ?>
