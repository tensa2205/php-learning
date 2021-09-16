<?php
//LOGIN USANDO SESSION
$user = "diego";
$pass = "1234";
//PHP trae habilitadas las sesiones por defecto.
//Solo debemos decir que empiecen.
/*
  Dos formas:
  Podemos hacer que autoempiece apenas prendemos el servidor.
    Está en un archivo llamado php.ini. Buscar
    "session.auto_start=0" -> php.ini se encuentra en la carpeta php

  La otra forma es arrancarlo a nivel código. Ya que puede pasar
  que en todas las vistas no usemos la session.
  session_start(); -> indica que en ese archivo se va a manejar la sesión.

*/
session_start();

if($_POST['username'] == $user && $_POST['password'] == $pass){
  //Creo una sesión
  $_SESSION['login'] = 'administrador';
  echo 'Session creada';
}
else{
  echo "Usuario o contraseña incorrecta";
}


 ?>
