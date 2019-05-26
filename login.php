<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>

<div class="container">
  <h2>Login</h2>
 
  <div class="alert alert-info">
    <strong>Atención!</strong> Por favor auntentique su ingreso!


<?php
require('config.php');//se requiere del archivo config.php el cual hace la conexion a la DB
session_start();#inicia la sesion 
// If form submitted, insert values into the database.
if (isset($_POST['user'])){#se trae la variable en el metodo POST 
	$user = $_POST['user'];#se tienen las variables de forma local 
	$pass = $_POST['pass'];
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `usuarios` WHERE nombre ='$user'  
and contracena ='".md5($pass)."'";#se encripta el dato de la contraceña con md5
	$result = mysqli_query($con,$query) or die(mysql_error());#se guarda la consulta en la variable result
	$rows = mysqli_num_rows($result);
        if($rows==1){#se verifica la informacion, se ejecuta lo que esta dentro de los corchetes 
	    $_SESSION['username'] = $username;
	    $_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (3600);#se toma el tiempo que inicia la sesion y le suma 3600 sg 
            // Redirect user to index.php
	    header("Location: fase3/menu.html");# cuado termine aqui me reedirige a index.php  
         }else{
	echo "<div class='form'>
<h3>Username/password incorrectos.</h3>
<br/>Click aquí <a href='login.php'>Login</a></div>"; 
	}
    }else{
?>
<div class="form">
<form action="" method="POST" name="login">
<input type="text" name="user" placeholder="Usuario" required /><br /><br />
<input type="password" name="pass" placeholder="Clave" required /><br /><br />
<input name="submit" type="submit" value="Ingresar" />
</form>
<p>No está registrado? <a href='registration.php'>Registrese aquí</a></p>
<p>Consulte si ya esta registrado su ID? <a href='validaruser.html'>Valide su ID de usuario</a></p>
</div>
<?php } ?>





  </div>

</div>

</body>
</html>













