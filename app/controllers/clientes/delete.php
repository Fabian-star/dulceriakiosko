<?php
include('../../config.php');

//CODIGO PARA ELIMINAR A UN CLIENTE CON SU RESPECTIVO MENSAJE
$idCliente = $_POST['idCliente'];
$sentencia = $pdo->prepare("DELETE FROM cliente WHERE idCliente=:idCliente");

$sentencia->bindParam(':idCliente', $idCliente);
$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Se elimino al cliente";
$_SESSION['icono'] = "success";
header('location:'.$URL.'/clientes');

?>