<?php
    
    include('../app/config.php');
    include('../layout/parte1.php');
    include ('../app/controllers/clientes/lista.php');

    
    ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">LISTADO DE CLIENTES</h1>
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
                            <h3 class="card-title">Clientes Registrados</h3>
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
                                    <th><center>ID</center></th>
                                    <th><center>Apellido Paterno</center></th>
                                    <th><center>Apellido Materno</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Direccion</center></th>
                                    <th><center>Telefono</center></th>
                                    <th><center>Fecha Nac</center></th>
                                    <th><center>Correo</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                  </thead>
                  <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach($cliente_datos as $cliente_dato){ 
                                     $id_cliente = $cliente_dato['idCliente']; ?>
                                    <tr>
                                        <td><?php echo $contador = $contador + 1; ?></td>
                                        <td><?php echo $cliente_dato['idCliente']; ?></td>
                                        <td><?php echo $cliente_dato['apellidoPaterno']; ?></td>
                                        <td><?php echo $cliente_dato['apellidoMaterno']; ?></td>
                                        <td><?php echo $cliente_dato['nombre']; ?></td>
                                        <td><?php echo $cliente_dato['direccion']; ?></td>
                                        <td><?php echo $cliente_dato['telefono']; ?></td>
                                        <td><?php echo $cliente_dato['fechaNacimiento']; ?></td>
                                        <td><?php echo $cliente_dato['email']; ?></td>
                                        <td>
                                        <center>
                                          <div class=""btn-group>
                                            <a href="show.php?idCliente=<?php echo $id_cliente;?>" type="button" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                            <a href="update.php?idCliente=<?php echo $id_cliente;?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i></a>
                                            <a href="delete.php?idCliente=<?php echo $id_cliente;?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                                    <th><center>ID</center></th>
                                    <th><center>Apellido Paterno</center></th>
                                    <th><center>Apellido Materno</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Direccion</center></th>
                                    <th><center>Telefono</center></th>
                                    <th><center>Fecha Nac</center></th>
                                    <th><center>Correo</center></th>
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
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
              "infoEmpty": "Mostrando 0 to 0 of 0 Clientes",
              "infoFiltered": "(Filtrado de _MAX_ total Clientes)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Clientes",
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





  