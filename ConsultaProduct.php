<!DOCTYPE html>
<html lang="en">
<head>
  <title>Validar Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php
    $con= new mysqli('localhost','root','12345678','bdunad32');
    $cod = $_POST['codigo'];
    $consulta = "SELECT * FROM inventario WHERE Codigo = $cod";
    $result = $con->query($consulta);

    if( $result->num_rows > 0)
    {
        echo 1;
        echo "<br>";
        echo "El producto en estos momentos se encuentra registrado "; 
        while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["Id"]. " - codigo: " . $row["Codigo"]. " - marca: " . $row["Marca"]." - precio: " . $row["Precio"]." - cantidad: " . $row["Cantidad"]. "<br>";
      }
      }
    else
    {
        echo 0;
        echo "<br>";
        echo "El producto en estos momentos no se encuentra registrado ";
      } 
      mysqli_close($con);
?>
    <p><a href='ConsultaProduct.html'>Consulte el Producto por aquí</a></p>
</div>
</body> 
</html>
