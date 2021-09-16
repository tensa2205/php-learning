<?php
/*
  CLASES ANONIMAS: usadas cuando queremos crear objetos sencillos y
  unicos, funcionalidad agregada en la versión 7 de php.
  No definimos su nombre!
  Permite herencia!
  Pueden anidarse entre ellas!
*/

//Imprime: object(class@anonymous)#1 (0) { }

$hijo = new class(10){
  private $num;
  public function __construct($n){
    $this->num = $n;
  }
  public function getNum(){
    return $this->num;
  }
};
echo $hijo->getNum();
//Imprime: object(class@anonymous)#1 (0) { }
var_dump($hijo);
/*
El anidamiento de una clase anónima
dentro de otra clase no le proporciona acceso a ningún método o
propiedad privados o protegidos de la clase externa.
Para utilizar las propiedades o métodos protegidos de la clase externa,
la clase anónima puede extender la clase externa.
 Para utilizar las propiedades privadas de la clase externa en
 la clase anónima,  estos deben pasarse a su constructor:

*/

class Externa
{
    private $prop = 1;
    protected $prop2 = 2;

    protected function func1()
    {
        return 3;
    }

    public function func2()
    {
        return new class($this->prop) extends Externa {
            private $prop3;

            public function __construct($prop)
            {
                $this->prop3 = $prop;
            }

            public function func3()
            {
                return $this->prop2 + $this->prop3 + $this->func1();
            }
        };
    }
}

echo (new Externa)->func2()->func3();

 ?>
