<?php
    
    include('../app/config.php');
    include('../layout/sesion.php');
    include('../layout/parte1.php');
    
    ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">REGISTRO PARA UN NUEVO USUARIO</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <center>
    <div class="content">
      <div class="container-fluid">
            <div class="row">
              <div class="col-md-5">
              <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Ingresar datos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                          <div class="row">
                            <div class="col-md-12">
                              <form action="../app/controllers/usuarios/create.php" method="post">
                              <div class="form-group">
                                  <label for="">Nombres:</label>
                                  <input type="text" name="nombres" class="form-control" placeholder="Escriba el Nombre" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Email:</label>
                                  <input type="email" name="email" class="form-control" placeholder="ejemplo@gmail.com " required>
                              </div>
                              <div class="form-group">
                                  <label for="">Contraseña:</label>
                                  <input type="password" name="password" class="form-control" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Verificar Contraseña:</label>
                                  <input type="password" name="password_R" class="form-control" required>
                              </div>
                              <hr>
                              <div class="form-group">
                              <a href="index.php" class="btn btn-secondary">Cancelar</a>
                              <button type="submit" class="btn btn-success">Guardar</button>
                              </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    </div>
              </div>
            </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
</center>

 <?php   include('../layout/parte2.php'); ?>
 <?php   include('../layout/mensajes.php'); ?> 




  