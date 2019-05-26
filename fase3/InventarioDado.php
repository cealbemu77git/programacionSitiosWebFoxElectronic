<?php
//se llama la conexion a DB
include("../config.php");

function insertar(){

	#$id = $_POST['id'];
	$cod = $_POST['codigo'];
	$nomb = $_POST['nombre'];
	$marc = $_POST['marca'];
	$prec = $_POST['precio'];
	$cant = $_POST['cantidad'];
	// Create connection
	$conn = mysqli_connect('localhost','root','12345678','bdunad32');
	// Check connection
	if (!$conn) {
	    die("Sin conexion" . mysqli_connect_error());
	}

	$sql = "INSERT INTO inventario (Codigo, Nombre, Marca, Precio, Cantidad)
	VALUES ($cod', '$nomb', '$marc', '$prec', '$cant')";

	if (mysqli_query($conn, $sql)) {
	    echo "Datos grabados satisfactoriamente";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

    	return $conn;
    }


function consultar(){

	$id = $_POST['id'];
	// Create connection
	$conn = mysqli_connect('localhost','root','12345678','bdunad32');
	// Check connection
	if (!$conn) {
	    die("Sin conexion" . mysqli_connect_error());
	}

	$sql = "SELECT Id, Codigo, Nombre, Marca, Precio, Cantidad FROM inventario WHERE Id=$id";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "id: " . $row["Id"]. " - codigo: " . $row["Codigo"]. " - marca: " . $row["Marca"]." - precio: " . $row["Precio"]." - cantidad: " . $row["Cantidad"]. "<br>";
	    }
	} else {
        	echo "No existe un registro con este id";
	}
	mysqli_close($conn);
	return $conn;
    }

function eliminar(){

	$id = $_POST['id'];

	// Create connection
	$conn = mysqli_connect('localhost','root','12345678','bdunad32');
	// Check connection
	if (!$conn) {
	    die("Sin conexion" . mysqli_connect_error());
	}
		// sql to delete a record
	$sql = "DELETE FROM inventario WHERE Id=$id";

	if (mysqli_query($conn, $sql)) {
	    echo "Registro eliminado";
	} else {
	    echo "Error eliminando registro: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	return $conn;
    }

function actualizar(){

	$id = $_POST['id'];
	$cod = $_POST['codigo'];
	$nomb = $_POST['nombre'];
	$marc = $_POST['marca'];
	$prec = $_POST['precio'];
	$cant = $_POST['cantidad'];

	// Create connection
	$conn = mysqli_connect('localhost','root','12345678','bdunad32');
	// Check connection
	if (!$conn) {
	    die("Sin conexion" . mysqli_connect_error());, , , , 
	}
	$sql = "UPDATE inventario SET Codigo='$cod', Nombre='$nomb', Marca='$marc', Precio='$prec', Cantidad='$cant'  WHERE Id='$id'";

	if (mysqli_query($conn, $sql)) {
	    echo "Información actualizada satisfactoriamente";
	} else {
	    echo "Error actualizando la información: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	return $conn;
    }


//se llama la conexion a DB  otra prueba 
include("config.php");

	#$id = $_POST['id'];
	$cod = $_POST['codigo'];
	$nomb = $_POST['nombre'];
	$marc = $_POST['marca'];
	$prec = $_POST['precio'];
	$cant = $_POST['cantidad'];
	
	$sql = "INSERT INTO inventario (Codigo, Nombre, Marca, Precio, Cantidad)
	VALUES ('$cod', '$nomb', '$marc', '$prec', '$cant')";

	if (mysqli_query($con, $sql)) {
	    echo "Datos grabados satisfactoriamente";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);


?>