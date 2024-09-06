<?php
include('../../config.php');

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_R = $_POST['password_R'];
$id_usuario = $_POST['id_usuario'];

if ($password == "") {
    if ($password == $password_R) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sentencia = $pdo->prepare("UPDATE usuarios 
        SET nombres=:nombres,
        email=:email,
        fechaActualizacion=:fechaActualizacion 
        WHERE id =:id_usuario");
    $sentencia->bindParam( ':nombres', $nombres);
    $sentencia->bindParam( ':email', $email);
    // $sentencia->bindParam( ':fechaCreacion', $fechaHora); // Elimina esta línea
    $sentencia->bindParam( ':fechaActualizacion', $fechaHora); // Corrige aquí
    $sentencia->bindParam( ':id_usuario', $id_usuario);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se actualizó los datos del usuario";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/usuarios');
    }else{ 
    //echo"Las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no coinciden";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/usuarios/update.php?id='.$id_usuario);
    }
} else{
    if ($password == $password_R) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sentencia = $pdo->prepare("UPDATE usuarios 
        SET nombres=:nombres,
        email=:email,
        password=:password, 
        fechaActualizacion=:fechaActualizacion 
        WHERE id =:id_usuario");
    $sentencia->bindParam( ':nombres', $nombres);
    $sentencia->bindParam( ':email', $email);
    $sentencia->bindParam( ':password', $password);
    // $sentencia->bindParam( ':fechaCreacion', $fechaHora); // Elimina esta línea
    $sentencia->bindParam( ':fechaActualizacion', $fechaHora); // Corrige aquí
    $sentencia->bindParam( ':id_usuario', $id_usuario);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se actualizó los datos del usuario";
    $_SESSION['icono'] = "success";
    header('location:'.$URL.'/usuarios');
    }else{
    //echo"Las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no coinciden";
    $_SESSION['icono'] = "error";
    header('location:'.$URL.'/usuarios/update.php?id='.$id_usuario);
    }

}
?>

