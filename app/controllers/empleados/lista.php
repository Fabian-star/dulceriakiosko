<?php

//CODIGO PARA MOSTRAR A LOS EMPLEADOS
    $sql_empleado = "SELECT * FROM empleado";
    $query_empleado = $pdo->prepare($sql_empleado);
    $query_empleado->execute();
    $empleado_datos = $query_empleado->fetchAll( fetch_style: PDO::FETCH_ASSOC);


?>