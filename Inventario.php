
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container"><br/>
  <div class="alert alert-success"> 
    
<?php
require('config.php');
// If form submitted, insert values into the database.
if (isset($_POST['codigo'])){
        // removes backslashes
    $cod = $_POST['codigo'];
	$nomb = $_POST['nombre'];
	$marc = $_POST['marca'];
	$prec = $_POST['precio'];
	$cant = $_POST['cantidad'];
	
	$sql = "INSERT INTO inventario (Codigo, Nombre, Marca, Precio, Cantidad)
	VALUES ('$cod', '$nomb', '$marc', '$prec', '$cant')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<div class='form'>
<h3>Su registro fue realizado satisfactoriamente.</h3>
<br/>Click here to <a href='Inventario.php'>Inventario</a></div>";
        }
        mysqli_close($conn);
    }else{
?>
<div class="form">
<h1>Inventario</h1>
<form name="inventario" action="" method="POST">
 <div class="form-group">
  <label for="numero1">Código de producto</label>
  <input type="text" class="form-control"  placeholder="Ingrese el Código de producto" name="codigo">
    <br>
  <label for="numero2">Nombre de producto</label>
  <input type="text" class="form-control"  placeholder="Ingrese el Nombre de producto" name="nombre">
  <br>
  <label for="numero2">Marca del producto</label>
  <input type="text" class="form-control"  placeholder="Ingrese la Marca del producto" name="marca">
  <br>
  <label for="numero2">Precio de compra</label>
  <input type="text" class="form-control"  placeholder="Ingrese el recio de compra" name="precio">
  <br>
  <label for="numero2">Cantidad comprada</label>
  <input type="text" class="form-control"  placeholder="Ingrese la Cantidad comprada" name="cantidad">
  <br>
  <input type="submit" name="submit" value="Guardar" class="btn btn-primary"/>
  <input type="Button" name="" value="Limpiar" onclick="reset()" class="btn btn-primary">
  <a class="dropdown-item" href="fase3/menu.html">Menu</a>
</div>
</form>
</div>
<?php } ?>


  </div>
  
</div>

</body>
</html>
