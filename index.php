<?php
//include auth.php file on all secure pages(se hace un include llamado auth.php )
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bienenido</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Bienvenid@ <?php echo $_SESSION['username']; ?>!</p> 
<p>Esta es un área segura.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a> 
</div>
</body>
</html>