<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dulceria Kiosko</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- Libreria de SWEETALERT -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini">

<!--<script>
  Swal.fire({
  title: "Acceso consedido",
  text: "Bienvenido a la Dulceria kiosko <?php echo $email_session; ?>",
  icon: "success"
});
</script> -->

<div class="wrapper"> 

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <div class="card card-outline card-success">
          <a href="#" class="nav-link">SISTEMA DE VENTAS</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>" class="brand-link">
      <img src="<?php echo $URL;?>/public/images/logo.PNG" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dulceria Kiosko</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/images/usuario.webp" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombres_sesion;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Opciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item"></i>">
                <a href="<?php echo $URL;?>/usuariosU" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de usuarios</p>
                </a>
              </li>
              <li class="nav-item"></i>
                <a href="<?php echo $URL;?>/LOGIN/indexA.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/LOGIN/indexU.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro para Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/empleadosE" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de empleados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/LOGIN/indexQ.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empleados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/LOGIN/indexE.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro para empleados</p>
                </a>
                <li class="nav-item">
                <a href="<?php echo $URL;?>/productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen de Productos</p>
                </a>
                <li class="nav-item">
                <a href="<?php echo $URL;?>/productos/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro para Productos</p>
                </a>
              </li>
              </li>
                <li class="nav-item">
                <a href="<?php echo $URL;?>/ticket" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas del Dia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/ticket/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nueva venta</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo $URL;?>/app/controllers/login/cerrarSesion.php" class="nav-link" style="background-color: #ca0a0b">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Cerrar sesion
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>