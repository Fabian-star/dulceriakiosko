<?php

//CODIGO PARA MOSTRAR TODA LA LISTA DE LOS CLIENTES 
    $sql_cliente = "SELECT * FROM cliente";
    $query_cliente = $pdo->prepare($sql_cliente);
    $query_cliente->execute();
    $cliente_datos = $query_cliente->fetchAll( fetch_style: PDO::FETCH_ASSOC);


?>