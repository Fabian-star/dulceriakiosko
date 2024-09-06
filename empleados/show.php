<?php
    
    include('../app/config.php');
    include('../layout/parte1.php');
    include('../app/controllers/empleados/show_empleado.php');
    
    ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Vista de Empleados</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
            <div class="row">
              <div class="col-md-5">
              <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Datos del Empleado</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                          <div class="row">
                            <div class="col-md-12">
                              
                            <div class="form-group">
                                  <label for="">RFC</label>
                                  <input type="text" name="rfc" value="<?php echo $rfcEmpleado; ?>" class="form-control" disabled>
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
                                  <label for="">Genero</label>
                                  <input type="text" name="sexo" value="<?php echo $sexo; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Fecha Nac</label>
                                  <input type="text" name="fechaNacimiento" value="<?php echo $fechaNacimiento; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Telefono</label>
                                  <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Correo</label>
                                  <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Direccion</label>
                                  <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Fecha Contrato</label>
                                  <input type="text" name="fechaContrato" value="<?php echo $fechaContrato; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Area</label>
                                  <input type="text" name="area" value="<?php echo $area; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Turno</label>
                                  <input type="text" name="turno" value="<?php echo $turno; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Horario</label>
                                  <input type="text" name="horario" value="<?php echo $horario; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Sueldo</label>
                                  <input type="text" name="sueldo" value="<?php echo $sueldo; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Sucursal</label>
                                  <input type="text" name="sucursal" value="<?php echo $sucursal; ?>" class="form-control" disabled>
                              </div>
                              <hr>
                              <div class="form-group">
                              <center><a href="index.php" class="btn btn-warning">Regresar</a></center>
                              
                              </div>
                              
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