<?php


session_start();

//Hay que verificar que la sesión no sea nula
if(isset($_SESSION['login'])){
  echo "Bienvenido session {$_SESSION['login']}";

  //Borrado de cookie username
  unset($_COOKIE['username']);
  setcookie("username", null, -1);
  //borrado de cookie password
  unset($_COOKIE['password']);
  setcookie("password", null, -1);
}
else{
  echo "Sin sesion";
}

//COOKIES
if(isset($_COOKIE['username'])):
  echo "Bienvenido cookie" .$_COOKIE['username'];
else:
  echo 'Sin cookie';
endif;
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form method="post", action="cookies-session/loginCookie.php">
         Usuario: <input type="text" name="username" /> <br />
         Contraseña: <input type="password" name="password" /> <br />
         <input type="submit" name="submit" /> <br />
     </form>

   </body>
 </html>
