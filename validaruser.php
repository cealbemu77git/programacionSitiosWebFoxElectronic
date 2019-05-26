<!DOCTYPE html>
<html lang="en">
<head>
  <title>Validar Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php
    $conexion= new mysqli('localhost','root','12345678','bdunad32');
    $id = $_POST['id'];
    $consulta = "SELECT * FROM usuarios WHERE Id = $id";
    $result = $conexion->query($consulta);

    if( $result->num_rows > 0)
    {
        echo 1;
        echo "<br>";
        echo "Usted en estos momentos se encuentra registrado "; 
      }
    else
    {
        echo 0;
        echo "<br>";
        echo "Usted en estos momentos no se encuentra registrado ";
      } 
?>
    <p><a href='login.php'>Ingrese o regístrese por aquí</a></p>
</div>
</body> 
</html>
