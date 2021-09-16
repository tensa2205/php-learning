<?php

/*
Si yo x ejemplo definiera un namespace en la clase padre

namespace poo\persona\Persona;

DEBO USAR LA SENTENCIA use poo\persona\Persona; en cada hijo de esta clase.
También al usar eso se debe borrar la barra invertida usada en el extends.
*/
class Persona{
  //Atributos
  private $nombre = ""; //Muestra de valor x defecto.
  private $apellido;
  public static $varStatic = 2021;

  //Guiones bajos ya que constructor es mágico.
  //Uso de this
  public function __constructor(){
    $this->nombre = "";
    $this->apellido = "";
  }

  //Get y set con métodos mágicos.
  //propiedad indica el atributo, valor indica el nuevo valor
  public function __set($propiedad, $valor){
    $this->$propiedad = $valor;
  }

  public function __get($propiedad){
    return $this->$propiedad;
  }



  //getters y setters autogenerados por php-getters-setters
  /*
    Métodos mágicos o getters/setters de siempre?

    En getters/setters de siempre podemos especificar tipos de parámetro
    y tipo de retorno.
  */

  public function getNombre()
  {
      return $this->nombre;
  }

  public function setNombre(string $nombre)
  {
      $this->nombre = $nombre;
  }

  public function getApellido()
  {
      return $this->apellido;
  }

  public function setApellido(string $apellido)
  {
      $this->apellido = $apellido;
  }

  public function obtenerEdad($f){
    //Llama la función privada
    echo "Tu edad es: {$this->restarFechas($f)}";
  }
  protected function restarFechas($f){
    //Para referenciar atributos estáticos:
    // self::$nombreAtributoEstatico
    //Sino da error.
    return self::$varStatic - $f;
  }

  public function __destruct(){
    echo "Se murio";
  }

}


 ?>
