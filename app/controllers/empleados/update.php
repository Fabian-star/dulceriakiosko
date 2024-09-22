<?php
include('../../config.php');
//MUESTRA LOS DATOS DEL EMPLEADO PARA PODER MODIFICAR
$rfcEmpleado = $_POST['rfcEmpleado'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$fechaContrato = $_POST['fechaContrato'];
$area = $_POST['area'];
$turno = $_POST['turno'];
$horario = $_POST['horario'];
$sueldo = $_POST['sueldo'];
$sucursal = $_POST['sucursal'];

if (isset($_POST['rfcEmpleado'])) {
    $sentencia = $pdo->prepare("UPDATE empleado 
    SET rfcEmpleado=:rfcEmpleado,
    apellidoPaterno=:apellidoPaterno,
    apellidoMaterno=:apellidoMaterno,
    nombre=:nombre,
    sexo=:sexo,
    fechaNacimiento=:fechaNacimiento, 
    telefono=:telefono,
    email=:email,
    direccion=:direccion, 
    fechaContrato=:fechaContrato,
    area=:area,
    turno=:turno, 
    horario=:horario,
    sueldo=:sueldo,
    sucursal=:sucursal
    WHERE rfcEmpleado=:rfcEmpleado");
    $sentencia->bindParam(':rfcEmpleado', $rfcEmpleado);
    $sentencia->bindParam(':apellidoPaterno', $apellidoPaterno);
    $sentencia->bindParam(':apellidoMaterno', $apellidoMaterno);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':sexo', $sexo);
    $sentencia->bindParam(':fechaNacimiento', $fechaNacimiento);
    $sentencia->bindParam(':telefono', $telefono);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':direccion', $direccion);
    $sentencia->bindParam(':fechaContrato', $fechaContrato);
    $sentencia->bindParam(':area', $area);
    $sentencia->bindParam(':turno', $turno);
    $sentencia->bindParam(':horario', $horario);
    $sentencia->bindParam(':sueldo', $sueldo);
    $sentencia->bindParam(':sucursal', $sucursal);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se actualizó los datos del empleado";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/empleados');
} else {
    //echo"Las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Datos erroneos intentelo nuevamente";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/empleados/update.php?rfcEmpleado='.$rfcEmpleado_empleado);
}
?>