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
            <h1 class="m-0">REGISTRO PARA UN NUEVO CLIENTE</h1>
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
                              <form action="../app/controllers/clientes/create.php" method="post">
                              <div class="form-group">
                                  <label for="">ID:</label>
                                  <input type="number" name="idCliente" class="form-control" placeholder="Escriba el ID" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Apellido Paterno:</label>
                                  <input type="text" name="apellidoPaterno" class="form-control" placeholder="Escriba el Apellido Paterno" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Apellido Materno:</label>
                                  <input type="text" name="apellidoMaterno" class="form-control" placeholder="Escriba el Apellido Materno" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Nombre:</label>
                                  <input type="text" name="nombre" class="form-control" placeholder="Escriba el Nombre" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Direccion:</label>
                                  <input type="text" name="direccion" class="form-control" placeholder="Escriba la Direccion" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Telefono:</label>
                                  <input type="text" name="telefono" class="form-control" placeholder="Escriba el Telefono" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Fecha Nacimiento:</label>
                                  <input type="date" name="fechaNacimiento" class="form-control" placeholder="Escriba la fecha de nacimiento" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Correo:</label>
                                  <input type="email" name="email" class="form-control" placeholder="ejemplo@gmail.com" required>
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