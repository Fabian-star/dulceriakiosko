<?php
include('../../config.php');

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


if (isset($_POST['rfcEmpleado']) && isset($_POST['apellidoPaterno']) && isset($_POST['apellidoMaterno']) && isset($_POST['nombre']) && isset($_POST['sexo']) && isset($_POST['fechaNacimiento']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['direccion']) && isset($_POST['fechaContrato']) && isset($_POST['area']) && isset($_POST['turno']) && isset($_POST['horario']) && isset($_POST['sueldo']) && isset($_POST['sucursal'])) {
$sentencia = $pdo->prepare("INSERT INTO empleado
(rfcEmpleado, apellidoPaterno, apellidoMaterno, nombre, sexo, fechaNacimiento, telefono, email, direccion, fechaContrato, area, turno, horario, sueldo, sucursal) 
VALUES (:rfcEmpleado, :apellidoPaterno, :apellidoMaterno, :nombre, :sexo, :fechaNacimiento, :telefono, :email, :direccion, :fechaContrato, :area, :turno, :horario, :sueldo, :sucursal)");
$sentencia->bindParam( ':rfcEmpleado', $rfcEmpleado);
$sentencia->bindParam( ':apellidoPaterno', $apellidoPaterno);
$sentencia->bindParam( ':apellidoMaterno', $apellidoMaterno);
$sentencia->bindParam( ':nombre', $nombre);
$sentencia->bindParam( ':sexo', $sexo);
$sentencia->bindParam( ':fechaNacimiento', $fechaNacimiento);
$sentencia->bindParam( ':telefono', $telefono);
$sentencia->bindParam( ':email', $email);
$sentencia->bindParam( ':direccion', $direccion);
$sentencia->bindParam( ':fechaContrato', $fechaContrato);
$sentencia->bindParam( ':area', $area);
$sentencia->bindParam( ':turno', $turno);
$sentencia->bindParam( ':horario', $horario);
$sentencia->bindParam( ':sueldo', $sueldo);
$sentencia->bindParam( ':sucursal', $sucursal);
$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Se registro al nuevo Empleado";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/empleados');
}else{
    //echo"Las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Datos erroneos intentelo nuevamente";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/empleados/create.php');
}

?>