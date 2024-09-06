<?php
    
    include('../app/config.php');
    include('../layout/sesion.php');
    include('../layout/parte1.php');
    include ('../app/controllers/usuarios/lista.php');

    
    ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">LISTADO DE USUARIOS</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios Registrados</h3>
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
                                    <th><center>Nombres</center></th>
                                    <th><center>Correo</center></th>
                                    <th><center>Accion</center></th>
                                </tr>
                  </thead>
                  <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach($usuarios_datos as $usuarios_dato){ 
                                     $id_usuario = $usuarios_dato['id']; ?>
                                    <tr>
                                        <td><?php echo $contador = $contador + 1; ?></td>
                                        <td><?php echo $usuarios_dato['nombres']; ?></td>
                                        <td><?php echo $usuarios_dato['email']; ?></td>
                                        <td>
                                        <center>
                                          <div class=""btn-group>
                                            <a href="show.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-warning"><i class="fa fa-eye"></i> Ver</a>
                                            
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
                                    <th><center>Nombres</center></th>
                                    <th><center>Correo</center></th>
                                    <th><center>Accion</center></th>
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
              "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
              "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Usuarios",
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
                        //extend: 'collection',
                        //text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            //text: 'copiar',
                            //extend: 'copy'
                        }, {
                            //extend: 'pdf',
                        }, {      
                            //extend: 'excel',
                        }, {
                            //text: 'Imprimir',
                            //extend: 'print'
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





  