<?php
include('../../config.php');

$numTicket_ticket = $_POST['numTicket_ticket'];

$sentencia = $pdo->prepare("DELETE FROM ticket WHERE numTicket=:numTicket_ticket");
$sentencia->bindParam( ':numTicket_ticket', $numTicket_ticket);
$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Se elimino la venta";
$_SESSION['icono'] = "success";
header('location:'.$URL.'/ticket');

?>