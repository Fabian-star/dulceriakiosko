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
            <h1 class="m-0">REGISTRO PARA UN NUEVO EMPLEADO</h1>
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
                              <form action="../app/controllers/empleados/create.php" method="post">
                              <div class="form-group">
                                  <label for="">RFC del empleado:</label>
                                  <input type="text" name="rfcEmpleado" class="form-control" placeholder="Escriba el RFC del empleado" required>
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
                                  <label for="">Genero:</label>
                                  <input type="text" name="sexo" class="form-control" placeholder="Escriba el genero" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Fecha Nac:</label>
                                  <input type="date" name="fechaNacimiento" class="form-control" placeholder="Escriba la fecha de nacimiento" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Telefono:</label>
                                  <input type="text" name="telefono" class="form-control" placeholder="Escriba el numero de telefono" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Correo:</label>
                                  <input type="email" name="email" class="form-control" placeholder="ejemplo@gmail.com" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Direccion:</label>
                                  <input type="text" name="direccion" class="form-control" placeholder="Escriba la direccion" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Fecha de Contrato:</label>
                                  <input type="date" name="fechaContrato" class="form-control" placeholder="Escriba la fecha de contrato" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Area:</label>
                                  <input type="text" name="area" class="form-control" placeholder="Escriba el area" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Turno:</label>
                                  <input type="text" name="turno" class="form-control" placeholder="Escriba el turno" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Horario:</label>
                                  <input type="text" name="horario" class="form-control" placeholder="Escriba el horario" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Salario:</label>
                                  <input type="text" name="sueldo" class="form-control" placeholder="Escriba el salario" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Sucursal:</label>
                                  <input type="text" name="sucursal" class="form-control" placeholder="Escriba la sucursal" required>
                              </div>
                              <hr>
                              <div class="form-group">
                              <a href="index.php" class="btn btn-secondary">Cancelar</a>
                              <button type="submit" class="btn btn-success">Generar Credencial</button>
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