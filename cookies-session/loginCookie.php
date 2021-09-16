<?php
$user = "diego";
$pass = "1234";

if($_POST['username'] == $user && $_POST['password'] == $pass){
  //El siguiente método crea una cookie con nombre username poblandola
  //con el valor de lo que recibo del form
  //Time es para especificar cuando se expirará la cookie (1 año).
    //Los cookies SIEMPRE expiran.
  setcookie('username', $_POST['username'], time()+60*60*24*365);
  //Cookie para password.
  setcookie('password', $_POST['password'], time()+60*60*24*365);
  echo 'Cookie creado';
}
else{
  echo 'Usuario o contraseña incorrecto';
}
 ?>
