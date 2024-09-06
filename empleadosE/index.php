<?php
    
    include('../app/config.php');
    include('../layout/parte1.php');
    include ('../app/controllers/empleados/lista.php');

    
    ?> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">LISTADO DE EMPLEADOS</h1>
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
                            <h3 class="card-title">Empleados Registrados</h3>
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
                                    <th><center>RFC</center></th>
                                    <th><center>Apellido Paterno</center></th>
                                    <th><center>Apellido Materno</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Genero</center></th>
                                    <th><center>Fecha Nac</center></th>
                                    <th><center>Telefono</center></th>
                                    <th><center>Correo</center></th>
                                    <th><center>Direccion</center></th>
                                    <th><center>Fecha Contrato</center></th>
                                    <th><center>Area</center></th>
                                    <th><center>Turno</center></th>
                                    <th><center>Horario</center></th>
                                    <th><center>Sueldo</center></th>
                                    <th><center>Sucursal</center></th>
                                    <th><center>Accion</center></th>
                                </tr>
                  </thead>
                  <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach($empleado_datos as $empleado_dato){ 
                                     $rfcEmpleado_empleado = $empleado_dato['rfcEmpleado']; ?>
                                    <tr>
                                        <td><?php echo $contador = $contador + 1; ?></td>
                                        <td><?php echo $empleado_dato['rfcEmpleado']; ?></td>
                                        <td><?php echo $empleado_dato['apellidoPaterno']; ?></td>
                                        <td><?php echo $empleado_dato['apellidoMaterno']; ?></td>
                                        <td><?php echo $empleado_dato['nombre']; ?></td>
                                        <td><?php echo $empleado_dato['sexo']; ?></td>
                                        <td><?php echo $empleado_dato['fechaNacimiento']; ?></td>
                                        <td><?php echo $empleado_dato['telefono']; ?></td>
                                        <td><?php echo $empleado_dato['email']; ?></td>
                                        <td><?php echo $empleado_dato['direccion']; ?></td>
                                        <td><?php echo $empleado_dato['fechaContrato']; ?></td>
                                        <td><?php echo $empleado_dato['area']; ?></td>
                                        <td><?php echo $empleado_dato['turno']; ?></td>
                                        <td><?php echo $empleado_dato['horario']; ?></td>
                                        <td><?php echo $empleado_dato['sueldo']; ?></td>
                                        <td><?php echo $empleado_dato['sucursal']; ?></td>

                                        <td>
                                        <center>
                                          <div class=""btn-group>
                                            <a href="show.php?rfcEmpleado=<?php echo $rfcEmpleado_empleado;?>" type="button" class="btn btn-warning">VER<i class="fa fa-eye"></i></a>
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
                                    <th><center>RFC</center></th>
                                    <th><center>Apellido Paterno</center></th>
                                    <th><center>Apellido Materno</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Genero</center></th>
                                    <th><center>Fecha Nac</center></th>
                                    <th><center>Telefono</center></th>
                                    <th><center>Correo</center></th>
                                    <th><center>Direccion</center></th>
                                    <th><center>Fecha Contrato</center></th>
                                    <th><center>Area</center></th>
                                    <th><center>Turno</center></th>
                                    <th><center>Horario</center></th>
                                    <th><center>Sueldo</center></th>
                                    <th><center>Sucursal</center></th>
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
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Empleados",
              "infoEmpty": "Mostrando 0 to 0 of 0 Empleados",
              "infoFiltered": "(Filtrado de _MAX_ total Empleados)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Empleados",
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