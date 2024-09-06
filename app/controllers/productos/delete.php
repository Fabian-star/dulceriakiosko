<?php
include('../../config.php');

$codigoProducto = $_POST['codigoProducto'];

$sentencia = $pdo->prepare("DELETE FROM almacen WHERE codigoProducto=:codigoProducto");

    $sentencia->bindParam(':codigoProducto', $codigoProducto);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se elimino el producto";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/productos');

?>