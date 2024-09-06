<?php
include('../../config.php');

$codigoProducto = $_POST['codigoProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$descripcion = $_POST['descripcion'];

if (isset($_POST['codigoProducto']) && isset($_POST['nombreProducto']) && isset($_POST['precioProducto']) && isset($_POST['stock']) && isset($_POST['stock_minimo']) && isset($_POST['stock_maximo']) && isset($_POST['descripcion'])) {
    $sentencia = $pdo->prepare("UPDATE almacen 
    SET codigoProducto=:codigoProducto,
    nombreProducto=:nombreProducto,
    precioProducto=:precioProducto,
    stock=:stock,
    stock_minimo=:stock_minimo,
    stock_maximo=:stock_maximo, 
    descripcion=:descripcion
    WHERE codigoProducto=:codigoProducto");
    $sentencia->bindParam(':codigoProducto', $codigoProducto);
    $sentencia->bindParam(':nombreProducto', $nombreProducto);
    $sentencia->bindParam(':precioProducto', $precioProducto);
    $sentencia->bindParam(':stock', $stock);
    $sentencia->bindParam(':stock_minimo', $stock_minimo);
    $sentencia->bindParam(':stock_maximo', $stock_maximo);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se actualizó los datos del producto";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/productos');
} else {
    //echo"Las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Datos erroneos intentelo nuevamente";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/productos/update.php?codigoProducto='.$codigoProducto_producto);
}
?> 