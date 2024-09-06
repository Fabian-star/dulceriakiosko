<?php

$idCliente_cliente_get = $_GET['idCliente'];

$sql_cliente = "SELECT * FROM cliente where idCliente = '$idCliente_cliente_get'";
$query_cliente = $pdo->prepare($sql_cliente);
$query_cliente->execute();
$cliente_datos = $query_cliente->fetchAll( fetch_style: PDO::FETCH_ASSOC);

foreach ($cliente_datos as $cliente_dato){
    $idCliente = $cliente_dato['idCliente'];
    $apellidoPaterno = $cliente_dato['apellidoPaterno'];
    $apellidoMaterno = $cliente_dato['apellidoMaterno'];
    $nombre = $cliente_dato['nombre'];
    $direccion = $cliente_dato['direccion'];
    $telefono = $cliente_dato['telefono'];
    $fechaNacimiento = $cliente_dato['fechaNacimiento'];
    $email = $cliente_dato['email'];
}
?> 