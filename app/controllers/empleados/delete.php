<?php
include('../../config.php');
//CODIGO PARA ELIMINAR UN EMPLEADO
$rfcEmpleado = $_POST['rfcEmpleado'];
$sentencia = $pdo->prepare("DELETE FROM empleado WHERE rfcEmpleado=:rfcEmpleado");

    $sentencia->bindParam(':rfcEmpleado', $rfcEmpleado);
    $sentencia->execute(); 
    session_start();
    $_SESSION['mensaje'] = "Se elimino al empleado";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/empleados');

?>                                            