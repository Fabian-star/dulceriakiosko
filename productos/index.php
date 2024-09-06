<?php
    
    include('../app/config.php');
    include('../layout/parte1.php');
    include ('../app/controllers/productos/lista.php');

    
    ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">LISTADO DE PRODUCTOS</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-14">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Productos Registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                    <th><center>Numero</center></th>
                                    <th><center>Codigo</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Imagen</center></th>
                                    <th><center>Precio</center></th>
                                    <th><center>Stock</center></th>
                                    <th><center>Stock Minimo</center></th>
                                    <th><center>Stock Maximo</center></th>
                                    <th><center>Descripcion</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                  </thead>
                  <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach($producto_datos as $producto_dato){ 
                                     $codigoProducto_producto = $producto_dato['codigoProducto']; ?>
                                    <tr>
                                        <td><?php echo $contador = $contador + 1; ?></td>
                                        <td><?php echo $producto_dato['codigoProducto']; ?></td>
                                        <td><?php echo $producto_dato['nombreProducto']; ?></td>
                                        <td>
                                          <img src="<?php echo $producto_dato['imagen']; ?>" width="" alt="">
                                        </td>
                                        <td><?php echo $producto_dato['precioProducto']; ?></td>
                                        <td><?php echo $producto_dato['stock']; ?></td>
                                        <td><?php echo $producto_dato['stock_minimo']; ?></td>
                                        <td><?php echo $producto_dato['stock_maximo']; ?></td>
                                        <td><?php echo $producto_dato['descripcion']; ?></td>
                                        <td>
                                        <center>
                                         
                                          <div class=""btn-group>
                                            <a href="show.php?codigoProducto=<?php echo $codigoProducto_producto;?>" type="button" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                            <a href="update.php?codigoProducto=<?php echo $codigoProducto_producto;?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i></a>
                                            <a href="delete.php?codigoProducto=<?php echo $codigoProducto_producto;?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                          </center>
                                    
                                          </div>
                                        </td>
                                    </tr>
                                 <?php   
                                    }
                                    ?>
                                </tbody>
                                <tr>
                                <th><center>Numero</center></th>
                                    <th><center>Codigo</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Imagen</center></th>
                                    <th><center>Precio</center></th>
                                    <th><center>Stock</center></th>
                                    <th><center>Stock Minimo</center></th>
                                    <th><center>Stock Maximo</center></th>
                                    <th><center>Descripcion</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                    
                
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


 <script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5,
          language: {
              "emptyTable": "No hay información",
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
              "infoEmpty": "Mostrando 0 to 0 of 0 Clientes",
              "infoFiltered": "(Filtrado de _MAX_ total Productos)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Productos",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscador:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                  "first": "Primero",
                  "last": "Ultimo",
                  "next": "Siguiente",
                  "previous": "Anterior"
              }
             },
      "responsive": true, "lengthChange": true, "autoWidth": false,
      buttons: [{
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            text: 'copiar',
                            extend: 'copy'
                        }, {
                            extend: 'pdf',
                        }, {      
                            extend: 'excel',
                        }, {
                            text: 'Imprimir',
                            extend: 'print'
                        }
                        ]
                    },
                        {
                            extend: 'colvis',
                            text: 'Visor de columnas',
                            collectionLayout: 'fixed three column'
                        }
                    ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>