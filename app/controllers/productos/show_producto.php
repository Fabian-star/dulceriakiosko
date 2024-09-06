<?php
if (isset($_GET['codigoProducto'])) {
    $codigoProducto_producto_get = $_GET['codigoProducto'];

    $sql_producto = "SELECT * FROM almacen WHERE codigoProducto = :codigoProducto";
    $query_producto = $pdo->prepare($sql_producto);
    $query_producto->bindParam(':codigoProducto', $codigoProducto_producto_get);
    $query_producto->execute();
    $producto_datos = $query_producto->fetchAll(PDO::FETCH_ASSOC);

    if ($producto_datos) {
        foreach ($producto_datos as $producto_dato) {
            $codigoProducto = $producto_dato['codigoProducto'];
            $nombreProducto = $producto_dato['nombreProducto'];
            $imagen = $producto_dato['imagen'];
            $precioProducto = $producto_dato['precioProducto'];
            $stock = $producto_dato['stock'];
            $stock_minimo = $producto_dato['stock_minimo'];
            $stock_maximo = $producto_dato['stock_maximo'];
            $descripcion = $producto_dato['descripcion'];

            // Aquí muestras la imagen en HTML
            echo "<img src='$imagen' alt='$nombreProducto'>";
        }
    }
}
        
?>
