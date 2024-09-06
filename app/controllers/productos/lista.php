<?php


    $sql_producto = "SELECT * FROM almacen";
    $query_producto = $pdo->prepare($sql_producto);
    $query_producto->execute();
    $producto_datos = $query_producto->fetchAll( fetch_style: PDO::FETCH_ASSOC);


?>