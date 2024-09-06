<?php

$codigoProducto_producto_get = $_GET['codigoProducto'];

$sql_producto = "SELECT * FROM almacen where codigoProducto = '$codigoProducto_producto_get'";
$query_producto = $pdo->prepare($sql_producto);
$query_producto->execute();
$producto_datos = $query_producto->fetchAll( fetch_style: PDO::FETCH_ASSOC);

foreach ($producto_datos as $producto_dato){
    $codigoProducto = $producto_dato['codigoProducto'];
    $nombreProducto = $producto_dato['nombreProducto'];
    $precioProducto = $producto_dato['precioProducto'];
    $stock = $producto_dato['stock'];
    $stock_minimo = $producto_dato['stock_minimo'];
    $stock_maximo = $producto_dato['stock_maximo'];
    $descripcion = $producto_dato['descripcion'];
    
}
?> 