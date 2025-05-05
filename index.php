<?php
session_start();

// Verificar si ya hay sesión y redirigir solo si aún no estamos en la vista correspondiente
if (isset($_SESSION['RolID'])) {
    $rol = $_SESSION['RolID'];
    $ruta = "";

    switch ($rol) {
        case 110:
            $ruta = 'vista/adm_catalogo.php';
            break;
        case 120:
            $ruta = 'vista/cajero_catalogo.php';
            break;
        case 130:
            $ruta = 'vista/almacenero_catalogo.php';
            break;
        default:
            session_destroy();
            header('Location: index.php');
            exit();
    }

    // Evitar bucle: redirigir solo si no estamos ya en esa página
    if (basename($_SERVER['PHP_SELF']) !== basename($ruta)) {
        header("Location: $ruta");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Farmacia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/css/all.min.css">
</head>
<body>
<img class="wave" src="imagenes/imagen.jpg" alt="">
<div class="contenedor">
    <div class="img"></div>
    <div class="contenido-login">
        <form action="controlador/LoginController.php" method="post">
            <img src="imagenes/logo.jpg" alt="">
            <h2>FARMACIA BRITMANN</h2>
            <div class="input-div dni">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Usuario</h5>
                    <input type="text" name="user" class="input" required>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" name="pass" class="input" required>
                </div>
            </div>
            <a href="vista/recuperar.php">Recuperar contraseña</a>
            <a href="#">Crear cuenta</a>
            <input type="submit" class="btn" value="Iniciar Sesión">
        </form>
    </div>
</div>
<script src="js/index.js"></script>
</body>
</html>
