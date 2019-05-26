<?php
session_start();#aqui ininiamos sesion 
if(!isset($_SESSION["username"])){#capturamos un usuario 
header("Location: login.php");#nos envia a la pantalla login.php 
exit(); }#sale de aqui 

$now = time();#se crea una variable de tiempo 
   
  if($now > $_SESSION['expire']) {#la sesion a terminado 
  session_destroy();
   
echo "Su sesion a terminado,
  <a href='login.php'>Necesitas iniciar sesion</a>";#nos redirecciona a la pagina de login.php 
  exit;
  }
?>