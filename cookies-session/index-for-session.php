<?php
//Todo este codigo deberia ir en un index para ser ejecutado.


/*
  También es posible configurar la sesión en tiempo de ejecución, cambia sobre php.ini
  https://www.php.net/manual/es/session.configuration.php
  session_start(['name' => 'PHPCHANGED'])
*/
session_start(['name' => 'PHPCHANGED', 'auto_start' => 0]);
//borrado de todas las sesiones.
//session_destroy();
//también podemos especificar que sesión borrar usando unset.
unset($_SESSION['login']);

//Comprueba si la sesión está inhabilitada
if (session_status() == PHP_SESSION_DISABLE):
  echo "Deshabilitada";
endif;

//Comprueba si las sesiones están habilitadas pero no existe ninguna activa
if (session_status() == PHP_SESSION_NONE):
  echo "No existen sesiones activas";
endif;

//Comprueba si existe alguna sesión activa
if (session_status() == PHP_SESSION_ACTIVE):
  echo "EXISTO";
endif;


//Hay que verificar que la sesión no sea nula
if(isset($_SESSION['login'])){
  echo "Bienvenido session {$_SESSION['login']}";
}
else{
  echo "Sin sesion";
}
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form method="post", action="cookies-session/loginSession.php">
         Usuario: <input type="text" name="username" /> <br />
         Contraseña: <input type="password" name="password" /> <br />
         <input type="submit" name="submit" /> <br />
     </form>

   </body>
 </html>
