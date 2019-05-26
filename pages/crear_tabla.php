 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "mybdunad32";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Sin conexion: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE invitados (
Id INT(30) PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
contracena VARCHAR(30) NOT NULL,
email VARCHAR(50),
fechaRegistro TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla invitados creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 