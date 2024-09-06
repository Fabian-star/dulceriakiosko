<?php
include('../../config.php');

$codigoProducto = $_POST['codigoProducto'];
$nombreProducto = $_POST['nombreProducto'];
$imagen_nombre = $_FILES['imagen']['name'];
$imagen_temporal = $_FILES['imagen']['tmp_name'];
$ruta_destino = "imagenes/" . $imagen_nombre; // Utiliza la ruta relativa para guardar las imágenes
move_uploaded_file($imagen_temporal, $ruta_destino);

$precioProducto = $_POST['precioProducto'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$descripcion = $_POST['descripcion'];

if (isset($_POST['codigoProducto'], $_POST['nombreProducto'], $imagen_nombre, $_POST['precioProducto'], $_POST['stock'], $_POST['stock_minimo'], $_POST['stock_maximo'], $_POST['descripcion'])) {
    $sentencia = $pdo->prepare("INSERT INTO almacen (codigoProducto, nombreProducto, imagen, precioProducto, stock, stock_minimo, stock_maximo, descripcion) VALUES (:codigoProducto, :nombreProducto, :imagen, :precioProducto, :stock, :stock_minimo, :stock_maximo, :descripcion)");
    $sentencia->bindParam(':codigoProducto', $codigoProducto);
    $sentencia->bindParam(':nombreProducto', $nombreProducto);
    $sentencia->bindParam(':imagen', $ruta_destino); // Guardamos la ruta de la imagen en la base de datos
    $sentencia->bindParam(':precioProducto', $precioProducto);
    $sentencia->bindParam(':stock', $stock);
    $sentencia->bindParam(':stock_minimo', $stock_minimo);
    $sentencia->bindParam(':stock_maximo', $stock_maximo);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->execute();
    
    session_start();
    $_SESSION['mensaje'] = "Se registró un nuevo Producto";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/productos');
} else {
    session_start();
    $_SESSION['mensaje'] = "Datos erróneos, inténtelo nuevamente";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/productos/create.php');
}
?>
