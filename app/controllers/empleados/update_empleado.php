<?php
//CODIGO PARA MODIFICAR UN EMPLEADO
$rfcEmpleado_empleado_get = $_GET['rfcEmpleado'];

$sql_empleado = "SELECT * FROM empleado where rfcEmpleado = '$rfcEmpleado_empleado_get'";
$query_empleado = $pdo->prepare($sql_empleado);
$query_empleado->execute();
$empleado_datos = $query_empleado->fetchAll( fetch_style: PDO::FETCH_ASSOC);

foreach ($empleado_datos as $empleado_dato){
    $rfcEmpleado = $empleado_dato['rfcEmpleado'];
    $apellidoPaterno = $empleado_dato['apellidoPaterno'];
    $apellidoMaterno = $empleado_dato['apellidoMaterno'];
    $nombre = $empleado_dato['nombre'];
    $sexo = $empleado_dato['sexo'];
    $fechaNacimiento = $empleado_dato['fechaNacimiento'];
    $telefono = $empleado_dato['telefono'];
    $email = $empleado_dato['email'];
    $direccion = $empleado_dato['direccion'];
    $fechaContrato = $empleado_dato['fechaContrato'];
    $area = $empleado_dato['area'];
    $turno = $empleado_dato['turno'];
    $horario = $empleado_dato['horario'];
    $sueldo = $empleado_dato['sueldo'];
    $sucursal = $empleado_dato['sucursal'];
}
?> 
