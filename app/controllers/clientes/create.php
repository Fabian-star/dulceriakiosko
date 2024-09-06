<?php
include('../../config.php');

$idCliente = $_POST['idCliente'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$email = $_POST['email'];




if (isset($_POST['idCliente']) && isset($_POST['apellidoPaterno']) && isset($_POST['apellidoMaterno']) && isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['fechaNacimiento']) && isset($_POST['email'])) {
        $sentencia = $pdo->prepare("INSERT INTO cliente
        (idCliente, apellidoPaterno, apellidoMaterno, nombre, direccion, telefono, fechaNacimiento, email) 
        VALUES (:idCliente, :apellidoPaterno, :apellidoMaterno, :nombre, :direccion, :telefono, :fechaNacimiento, :email)");
$sentencia->bindParam( ':idCliente', $idCliente);
$sentencia->bindParam( ':apellidoPaterno', $apellidoPaterno);
$sentencia->bindParam( ':apellidoMaterno', $apellidoMaterno);
$sentencia->bindParam( ':nombre', $nombre);
$sentencia->bindParam( ':direccion', $direccion);
$sentencia->bindParam( ':telefono', $telefono);
$sentencia->bindParam( ':fechaNacimiento', $fechaNacimiento);
$sentencia->bindParam( ':email', $email);
$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Se registro al nuevo cliente";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/clientes');
}else{
    //echo"Las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Datos erroneos intentelo nuevamente";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/clientes/create.php');
}

?>