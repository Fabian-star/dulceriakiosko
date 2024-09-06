<?php

$numTicket_ticket_get = $_GET['numTicket'];

$sql_ticket = "SELECT * FROM ticket where numTicket = '$numTicket_ticket_get'";
$query_ticket = $pdo->prepare($sql_ticket);
$query_ticket->execute();
$ticket_datos = $query_ticket->fetchAll( fetch_style: PDO::FETCH_ASSOC);

foreach ($ticket_datos as $ticket_dato){
    $fechaVenta = $ticket_dato['fechaVenta'];
    $idCliente = $ticket_dato['idCliente'];
    $rfcEmpleado = $ticket_dato['rfcEmpleado'];
    $codigoProducto = $ticket_dato['codigoProducto'];
    $precioProducto = $ticket_dato['precioProducto'];
    $cantidad = $ticket_dato['cantidad'];
    $subtotal = $ticket_dato['subtotal'];
    $total = $ticket_dato['total'];


}

?>