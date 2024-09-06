<?php
    
    include('../app/config.php');
    include('../layout/sesion.php');
    include('../layout/parte1.php');
    include('../app/controllers/clientes/update_cliente.php');
    
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
                            <h3 class="card-title">Modificar datos del Cliente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                          <div class="row">
                            <div class="col-md-12">
                            <form action="../app/controllers/clientes/update.php" method="post">
                                <input type="text" name="idCliente_cliente" value="<?php echo $idCliente_cliente_get; ?>" hidden>  
                                <div class="form-group">
                                  <label for="">ID</label>
                                  <input type="number" name="idCliente" class="form-control" value="<?php echo $idCliente;?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Apellido Paterno</label>
                                  <input type="text" name="apellidoPaterno" class="form-control" value="<?php echo $apellidoPaterno;?>" required>
                              </div>
                                <div class="form-group">
                                  <label for="">Apellido Materno</label>
                                  <input type="text" name="apellidoMaterno" class="form-control" value="<?php echo $apellidoMaterno;?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Nombre</label>
                                  <input type="text" name="nombre" class="form-control" value="<?php echo $nombre;?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Direccion</label>
                                  <input type="text" name="direccion" class="form-control" value="<?php echo $direccion;?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Telefono</label>
                                  <input type="text" name="telefono" class="form-control" value="<?php echo $telefono;?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Fecha Nac</label>
                                  <input type="date" name="fechaNacimiento" class="form-control" value="<?php echo $fechaNacimiento;?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required>
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