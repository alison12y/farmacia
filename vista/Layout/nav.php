<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Botón para contraer sidebar -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="adm_catalogo.php" class="nav-link">Inicio</a>
    </li>
  </ul>

  <!-- Cerrar sesión -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="../controlador/Logout.php" class="nav-link">Cerrar Sesión</a>
    </li>
  </ul>
</nav>

<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="adm_catalogo.php" class="brand-link">
    <img src="../imagenes/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 35px; height: 35px;">
    <span class="brand-text font-weight-light">Farmacia</span>
  </a>

  <div class="sidebar">
    <!-- Usuario -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../imagenes/avatar.png" class="img-circle elevation-2" alt="User Image" style="width: 35px; height: 35px;">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php echo isset($_SESSION['nombre_us']) ? $_SESSION['nombre_us'] : 'Usuario'; ?>
        </a>
      </div>
    </div>

    <!-- Menú lateral -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-header">MENÚ</li>
        <li class="nav-item"><a href="gestionar_usuario.php" class="nav-link"><i class="nav-icon fas fa-users-cog"></i><p>Gestionar Usuario</p></a></li>
        <li class="nav-item"><a href="registrar_venta.php" class="nav-link"><i class="nav-icon fas fa-cash-register"></i><p>Registrar Venta</p></a></li>
        <li class="nav-item"><a href="generar_factura.php" class="nav-link"><i class="nav-icon fas fa-file-invoice"></i><p>Generar Factura o Recibo</p></a></li>
        <li class="nav-item"><a href="consultar_facturas.php" class="nav-link"><i class="nav-icon fas fa-search-dollar"></i><p>Consultar Facturas</p></a></li>
        <li class="nav-item"><a href="validar_receta.php" class="nav-link"><i class="nav-icon fas fa-notes-medical"></i><p>Validar Receta Médica</p></a></li>
      </ul>
    </nav>
  </div>
</aside>



