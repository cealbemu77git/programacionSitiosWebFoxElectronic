 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "mybdunad32";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE usuarios (
Id INT(30) PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
contracena VARCHAR(30) NOT NULL,
email VARCHAR(50),
fechaRegistro TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla usuarios creada satisfactoriamente";
} else {
    echo "Error creando tabla usuarios: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 