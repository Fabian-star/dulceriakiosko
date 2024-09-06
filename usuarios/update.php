<?php
    
    include('../app/config.php');
    include('../layout/sesion.php');
    include('../layout/parte1.php');
    include('../app/controllers/usuarios/update_usuario.php');
    
    ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Actualizacion de Datos</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
            <div class="row">
              <div class="col-md-5">
              <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Modificar datos del Usuario</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                          <div class="row">
                            <div class="col-md-12">
                            <form action="../app/controllers/usuarios/update.php" method="post">
                                <input type="text" name="id_usuario" value="<?php echo $id_usuario_get; ?>" hidden>  
                            <div class="form-group">
                                  <label for="">Nombres</label>
                                  <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Contraseña</label>
                                  <input type="password" name="password" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="">Verificar Contraseña</label>
                                  <input type="password" name="password_R" class="form-control">
                              </div>
                              <hr>
                              <div class="form-group">
                              <a href="index.php" class="btn btn-secondary">Cancelar</a>
                              <button type="submit" class="btn btn-success">Actualizar</button>
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


 <?php   include('../layout/mensajes.php'); ?>
 <?php   include('../layout/parte2.php'); ?> 