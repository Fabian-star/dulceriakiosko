<?php
include('../../config.php');

//CODIGO QUE MUESTRA TODOS LOS DATOS DEL CLIENTE PARA PODER EDITAR
$idCliente = $_POST['idCliente'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$email = $_POST['email'];

 

if (isset($_POST['idCliente']) && isset($_POST['apellidoPaterno']) && isset($_POST['apellidoMaterno']) && isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['fechaNacimiento']) && isset($_POST['email'])) {
    $sentencia = $pdo->prepare("UPDATE cliente 
    SET apellidoPaterno=:apellidoPaterno,
    apellidoMaterno=:apellidoMaterno,
    nombre=:nombre,
    direccion=:direccion,
    telefono=:telefono, 
    fechaNacimiento=:fechaNacimiento,
    email=:email
    WHERE idCliente=:idCliente");
$sentencia->bindParam(':idCliente', $idCliente);
$sentencia->bindParam(':apellidoPaterno', $apellidoPaterno);
$sentencia->bindParam(':apellidoMaterno', $apellidoMaterno);
$sentencia->bindParam(':nombre', $nombre);
$sentencia->bindParam(':direccion', $direccion);
$sentencia->bindParam(':telefono', $telefono);
$sentencia->bindParam(':fechaNacimiento', $fechaNacimiento);
$sentencia->bindParam(':email', $email);
$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Se actualizó los datos del cliente";
$_SESSION['icono'] = "success";
header('location:'.$URL.'/clientes');
}else{
//echo"Las contraseñas no coinciden";
session_start();
$_SESSION['mensaje'] = "Datos erroneos intentelo nuevamente";
$_SESSION['icono'] = "error";
header('location:'.$URL.'/clientes/update.php?idCliente='.$idCliente_cliente);
}
?>