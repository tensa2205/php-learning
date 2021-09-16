<?php
//HERENCIA: palabra clave extends, permite usar propiedades/métodos public y protected.
/*
  public -> público para usar por todos.
  private -> solo usable por instancias de esa clase.
  protected -> solo usable por esa clase y las subclases (NO INSTANCIAS).
*/

namespace controlador\vendedor;
require_once 'POO/Persona.php';
/*
  FORMA PARTE DE LA LECCIÓN DE NAMESPACE:
  POR QUE BARRA INVERTIDA PARA PERSONA?

  Dado que este archivo tiene un namespace, es necesario
  incluir la barra invertida cuando especificamos extends.
*/
class Vendedor extends \Persona{
  private $codigoInterno;
  private $caja;

  public function __constructor(){
    $this->codigoInterno = 0;
    $this->caja ="";
  }

  public function lluviaEstrellas(){
    //Usar métodos y propiedades de nuestro padre
    $tiempo = parent::restarFechas(2000)*25;
    echo "Tu edad sera: {$tiempo}";
  }

  public function prueba(){
    echo "Controlador/Vendedor";
  }
}

 ?>
