<?php
session_start();
if($_SESSION['RolID']==2){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajero</title>
</head>
<body>
<h1>Hola Cajero</h1>
<a href="../controlador/logout.php">Cerrar Sesion</a>
</body>
</html>
<?php
}
else{
    header('Location: ../vista/../index.php');
}
?>