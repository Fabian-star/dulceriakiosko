<?php


    $sql_ticket = "SELECT * FROM ticket";
    $query_ticket = $pdo->prepare($sql_ticket);
    $query_ticket->execute();
    $ticket_datos = $query_ticket->fetchAll( fetch_style: PDO::FETCH_ASSOC);


?>