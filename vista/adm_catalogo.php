<?php
session_start();

// Redirigir si no hay sesión iniciada o no es administrador
if (!isset($_SESSION['RolID']) || $_SESSION['RolID'] != 110) {
    header('Location: ../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrador | Catálogo</title>
  <link rel="icon" href="../img/logo.png" type="image/png">

  <!-- Estilos -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/custom_admin.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- NAVBAR SUPERIOR -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Inicio</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="../controlador/Logout.php" class="nav-link">Cerrar Sesión</a>
      </li>
    </ul>
  </nav>

  <!-- SIDEBAR -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="adm_catalogo.php" class="brand-link text-center">
      <img src="../imagenes/logo.jpg" alt="Logo" class="brand-image img-circle" style="width: 50px; height: 50px;">
      <span class="brand-text font-weight-light">Farmacia</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../imagenes/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Usuario'; ?>
          </a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
          <li class="nav-header">MENÚ</li>
          <li class="nav-item">
            <a href="gestionar_usuario.php" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Gestionar Usuario</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="registrar_venta.php" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>Registrar Venta</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="generar_factura.php" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>Generar Factura o Recibo</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="consultar_facturas.php" class="nav-link">
              <i class="nav-icon fas fa-search-dollar"></i>
              <p>Consultar Facturas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="validar_receta.php" class="nav-link">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>Validar Receta Médica</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- CONTENIDO -->
  <div class="content-wrapper p-4">
    <section class="content">
      <div class="container-fluid">
        <div class="text-center">
          <h1 class="display-5 font-weight-bold">Catálogo Administrador</h1>
          <p class="lead mt-3">Bienvenido Administrador</p>
          <p class="mb-0">Aquí podrás gestionar las opciones del sistema como usuario administrador.</p>
        </div>
      </div>
    </section>
  </div>

  <!-- FOOTER -->
  <footer class="main-footer text-center">
    <div class="float-right d-none d-sm-inline">
      <b>Versión</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2025 <a href="#">Farmacia Britmann</a>.</strong> Todos los derechos reservados.
  </footer>
</div>

<!-- Scripts -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/adminlte.min.js"></script>
</body>
</html>
