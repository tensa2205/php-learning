<?php
//CSPRNG y función intdiv

/*
  Que es CSPRNG? ->  Generador de números pseudoaleatorios
    criptograficamente seguros.
    Nos puede servir para generar tokens de seguridad y otras aplicaciones
    de criptografía.
*/

//CSPRNG
echo bin2hex(random_bytes(4));
//CSPRNG'Nt ahre
echo random_int(0,100);
var_dump(intdiv(3,2));

?>
