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
            <h1 class="m-0">NUEVA COMPRA</h1>
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
                              <form action="../app/controllers/ticket/create.php" method="post">
                              <div class="form-group">
                                  <label for="">Fecha de Venta:</label>
                                  <input type="date" name="fechaVenta" class="form-control" >
                              </div>
                              <div class="form-group">
                                  <label for="">ID del cliente:</label>
                                  <input type="number" name="idCliente" class="form-control" placeholder="Escriba el ID del cliente" required>
                              </div>
                              <div class="form-group">
                                  <label for="">RFC del Cajero:</label>
                                  <input type="text" name="rfcEmpleado" class="form-control" placeholder="Escriba su RFC" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Codigo del producto:</label>
                                  <input type="text" name="codigoProducto" class="form-control" placeholder="Escriba el codigo del Producto" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Precio del producto:</label>
                                  <input type="double" name="precioProducto" class="form-control" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Cantidad:</label>
                                  <input type="number" name="cantidad" class="form-control" placeholder="Escriba la cantidad del producto" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Subtotal:</label>
                                  <input type="double" name="subtotal" class="form-control" required>
                              </div>
                              <div class="form-group">
                                  <label for="">Total:</label>
                                  <input type="double" name="total" class="form-control" required>
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