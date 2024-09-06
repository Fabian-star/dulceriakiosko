<?php
    
    include('../app/config.php');
    include('../layout/parte1.php');
    include('../app/controllers/ticket/show_ticket.php');
    
    ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Eliminacion de Venta</h1>
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
                            <h3 class="card-title">¿Seguro que quiere eliminar el registro de la Venta?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                          <div class="row">
                            <div class="col-md-12">
                            <form action="../app/controllers/ticket/delete.php" method="post">
                                <input type="text" name="numTicket_ticket" value="<?php echo $numTicket_ticket_get;?>" hidden>
                            <div class="form-group">
                                  <label for="">Fecha de Venta:</label>
                                  <input type="dateTime" name="fechaVenta" value="<?php echo $fechaVenta; ?>" class="form-control" disabled >
                              </div>
                              <div class="form-group">
                                  <label for="">ID del cliente:</label>
                                  <input type="number" name="idCliente" value="<?php echo $idCliente; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">RFC del Cajero:</label>
                                  <input type="text" name="rfcEmpleado" value="<?php echo $rfcEmpleado; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Codigo del producto:</label>
                                  <input type="text" name="codigoProducto" value="<?php echo $codigoProducto; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Precio del producto:</label>
                                  <input type="double" name="precioProducto" value="<?php echo $precioProducto; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Cantidad:</label>
                                  <input type="number" name="cantidad" value="<?php echo $cantidad; ?>" class="form-control" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="">Subtotal:</label>
                                  <input type="double" name="subtotal" value="<?php echo $subtotal; ?>" class="form-control" disabled >
                              </div>
                              <div class="form-group">
                                  <label for="">Total:</label>
                                  <input type="double" name="total" value="<?php echo $total; ?>" class="form-control" disabled >
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