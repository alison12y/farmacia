<?php
session_start();
require_once '../modelo/Usuario.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario = new Usuario();
$usuario->Loguearse($user, $pass);

if (!empty($usuario->objetos)) {
    $obj = $usuario->objetos[0];
    $_SESSION['id'] = $obj->id;
    $_SESSION['usuario'] = $obj->Usuario;
    $_SESSION['RolID'] = $obj->RolID;

    // Redirigir según el RolID
    switch ($obj->RolID) {
        case 110: header('Location: ../vista/adm_catalogo.php'); break;
        case 120: header('Location: ../vista/almacenero_catalogo.php'); break;
        case 130: header('Location: ../vista/cajero_catalogo.php'); break;
        case 140: header('Location: ../vista/farmaceutico_catalogo.php'); break;
        case 150: header('Location: ../vista/supervisor_catalogo.php'); break;
        default: header('Location: ../index.php'); break;
    }
} else {
    // Usuario o contraseña incorrectos
    header('Location: ../index.php?error=1');
}
exit();









