
<HEAD>
 <TITLE>ADMINISTRADOR</TITLE>
</HEAD>
<style>
body {
    background-color: #34D2E1;


}
</style>
<BODY>

<?php
// variables

date_default_timezone_set("America/Bogota");
$dbhost="localhost";
$dbuser="root";
$dbpass="12345678";
$dbname="mybdunad32";


//Para utilizar Mysqldump y realizar el respaldo, se debe declarar una variable haciendo referencia a la ubicacion del archivo mysqldump.exe
$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
$backup_file = '"C:\AppServ\www\fase4\backups\"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $dbuser -p$dbpass $dbname > $backup_file");


?>


<h2><p align="center">COPIA DE SEGURIDAD REALIZADA SATISFACTORIAMENTE</p></h2>

</BODY>
</HTML>
