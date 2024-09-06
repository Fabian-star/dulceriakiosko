<?php
     
    include('../app/config.php');
    include('../layout/parte1.php');
    include('../app/controllers/clientes/show_cliente.php');
    
    ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Eliminacion del cliente</h1>
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
                            <h3 class="card-title">¿Seguro que desea eliminar al cliente?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                          <div class="row">
                            <div class="col-md-12">
                            <form action="../app/controllers/clientes/delete.php" method="post">
                                <input type="text" name="idCliente" value="<?php echo $id_cliente_get;?>" hidden>
                            <div class="form-group">
                                  <label for="">ID</label>
                                  <input type="text" name="idCliente" value="<?php echo $idCliente; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Apellido Paterno</label>
                                  <input type="text" name="apellidoPaterno" value="<?php echo $apellidoPaterno; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Apellido Materno</label>
                                  <input type="text" name="apellidoMaterno" value="<?php echo $apellidoMaterno; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Nombre</label>
                                  <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Direccion</label>
                                  <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Telefono</label>
                                  <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Fecha Nac</label>
                                  <input type="text" name="fechaNacimiento" value="<?php echo $fechaNacimiento; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Correo</label>
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