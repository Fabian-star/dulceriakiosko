<?php
include('../app/config.php');
include('../layout/parte1.php');
include('../app/controllers/productos/show_producto.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Vista del Producto</h1>
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
                            <h3 class="card-title">Datos del Producto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="">Codigo</label>
                                        <input type="text" name="codigoProducto" value="<?php echo $codigoProducto; ?>"
                                            class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="nombreProducto" value="<?php echo $nombreProducto; ?>"
                                            class="form-control" disabled>
                                    </div>
                                    <!-- Cambié el tipo de input a "text" para la imagen -->
                                    <div class="form-group">
                                        <label for="">Imagen</label>
                                        <input type="text" name="imagen" value="<?php echo $imagen; ?>"
                                            class="form-control" disabled>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Precio</label>
                                        <input type="text" name="precioProducto" value="<?php echo $precioProducto; ?>"
                                            class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Stock</label>
                                        <input type="number" name="stock" value="<?php echo $stock; ?>"
                                            class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Stock Minimo</label>
                                        <input type="number" name="stock_minimo" value="<?php echo $stock_minimo; ?>"
                                            class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Stock Maximo</label>
                                        <input type="number" name="stock_maximo" value="<?php echo $stock_maximo; ?>"
                                            class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Descripcion</label>
                                        <input type="text" name="descripcion" value="<?php echo $descripcion; ?>"
                                            class="form-control" disabled>
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
