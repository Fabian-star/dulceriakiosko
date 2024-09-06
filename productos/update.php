<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/productos/update_producto.php');
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
                            <h3 class="card-title">Modificar datos del Producto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                          <div class="row">
                            <div class="col-md-12">
                            <form action="../app/controllers/productos/update.php" method="post" >
                                  <input type="text" name="codigoProducto_producto" value="<?php echo $codigoProducto_producto_get; ?>" hidden>
                                  <div class="form-group"> 
                                      <label for="">Codigo del producto</label>
                                      <input type="text" name="codigoProducto" class="form-control" value="<?php echo $codigoProducto;?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Nombre del producto</label>
                                      <input type="text" name="nombreProducto" class="form-control" value="<?php echo $nombreProducto;?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Imagen</label>
                                      <input type="file" name="imagen" class="form-control" required>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="">Precio del producto</label>
                                      <input type="text" name="precioProducto" class="form-control" value="<?php echo $precioProducto;?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Stock</label>
                                      <input type="number" name="stock" class="form-control" value="<?php echo $stock;?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Stock Minimo</label>
                                      <input type="number" name="stock_minimo" class="form-control" value="<?php echo $stock_minimo;?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Stock Maximo</label>
                                      <input type="number" name="stock_maximo" class="form-control" value="<?php echo $stock_maximo;?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Descripcion</label>
                                      <input type="text" name="descripcion" class="form-control" value="<?php echo $descripcion;?>" required>
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
