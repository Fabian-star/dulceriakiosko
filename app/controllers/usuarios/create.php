<?php
include('../../config.php');

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_R = $_POST['password_R'];

if ($password == $password_R) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sentencia = $pdo->prepare("INSERT INTO usuarios
        (nombres, email, password,fechaCreacion) 
        VALUES (:nombres,:email,:password,:fechaCreacion)");
$sentencia->bindParam( ':nombres', $nombres);
$sentencia->bindParam( ':email', $email);
$sentencia->bindParam( ':password', $password);
$sentencia->bindParam( ':fechaCreacion', $fechaHora);
$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Se registro al nuevo usuario";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/usuarios');
}else{
    //echo"Las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no coinciden";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/usuarios/create.php');
}

?>