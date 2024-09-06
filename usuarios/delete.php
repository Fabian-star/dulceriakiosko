<?php
    
    include('../app/config.php');
    include('../layout/sesion.php');
    include('../layout/parte1.php');
    include('../app/controllers/usuarios/show_usuario.php');
    
    ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Eliminacion de Usuario</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
            <div class="row">
              <div class="col-md-5">
              <div class="card card-outline card-danger">
                        <div class="card-header">
                            <h3 class="card-title">¿Seguro que quiere eliminar este usuario?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                          <div class="row">
                            <div class="col-md-12">
                              <form action="../app/controllers/usuarios/delete.php" method="post">
                                <input type="text" name="id_usuario" value="<?php echo $id_usuario_get;?>" hidden>
                              <div class="form-group">
                                  <label for="">Nombres</label>
                                  <input type="text" name="nombres" value="<?php echo $nombres; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" disabled>
                              </div>
                              <hr>
                              <div class="form-group">
                              <center><a href="index.php" class="btn btn-warning">Regresar</a>
                              <button class="btn btn-danger">Eliminar</button>
                            </center>
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


 <?php   include('../layout/parte2.php'); ?>
 <?php   include('../layout/mensajes.php'); ?>