<?php
include('../../config.php');

$idCliente = $_POST['idCliente'];
$sentencia = $pdo->prepare("DELETE FROM cliente WHERE idCliente=:idCliente");

$sentencia->bindParam(':idCliente', $idCliente);
$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Se elimino al cliente";
$_SESSION['icono'] = "success";
header('location:'.$URL.'/clientes');

?>