<?php
include('../../config.php');

$fechaVenta = $_POST['fechaVenta'];
$idCliente = $_POST['idCliente'];
$rfcEmpleado = $_POST['rfcEmpleado'];
$codigoProducto = $_POST['codigoProducto'];
$precioProducto = $_POST['precioProducto'];
$cantidad = $_POST['cantidad'];
$subtotal = $_POST['subtotal'];
$total = $_POST['total'];


if (isset($_POST['fechaVenta']) && isset($_POST['idCliente']) && isset($_POST['rfcEmpleado']) && isset($_POST['codigoProducto']) && isset($_POST['precioProducto']) && isset($_POST['cantidad']) && isset($_POST['subtotal']) && isset($_POST['total'])) {
$sentencia = $pdo->prepare("INSERT INTO ticket
(fechaVenta, idCliente, rfcEmpleado, codigoProducto, precioProducto, cantidad, subtotal, total) 
VALUES (:fechaVenta, :idCliente, :rfcEmpleado, :codigoProducto, :precioProducto, :cantidad, :subtotal, :total)");
$sentencia->bindParam( ':fechaVenta', $fechaHora);
$sentencia->bindParam( ':idCliente', $idCliente);
$sentencia->bindParam( ':rfcEmpleado', $rfcEmpleado);
$sentencia->bindParam( ':codigoProducto', $codigoProducto);
$sentencia->bindParam( ':precioProducto', $precioProducto);
$sentencia->bindParam( ':cantidad', $cantidad);
$sentencia->bindParam( ':subtotal', $subtotal);
$sentencia->bindParam( ':total', $total);
$sentencia->execute(); 
session_start();
    $_SESSION['mensaje'] = "Gracias por su compra";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/ticket');
}else{
    //echo"Las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Datos erroneos intentelo nuevamente";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/ticket/create.php');
}

?>