<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DULCERIA KIOSKO</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- Libreria de SWEETALERT -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
<!-- CMENSAJE DE USUARIO NO REGISTRADO -->
    <?php
    session_start();
        if (isset($_SESSION['mensaje'])) {
          $respuesta = $_SESSION['mensaje']; ?>
          <script>
            Swal.fire({
            icon: "error",
            title: "<?php echo $respuesta;?>",
            text: "Intentelo nuevamente"
});
          </script>
    <?php
        } 
    ?>
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="../public/templeates/AdminLTE-3.2.0/index2.html" class="h1"><b>Bienvenido a </b>Dulceria Kiosko</a>
    </div>
    <center>
    <img src="https://img.freepik.com/vector-premium/icono-perfil-avatar_188544-4755.jpg?w=740" alt="150" width="150">
    </center>
    <div class="card-body">
    <center>
      <p class="login-box-msg"><h4>Ingrese sus datos</h4></p>
      </center>
      <form action="../app/controllers/login/ingreso.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-outline-success btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>