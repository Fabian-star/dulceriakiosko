<?php
include('../../config.php');

$email = $_POST['email'];
$password = $_POST['password'];


$contador = 0;
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll( fetch_style: PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $emailT = $usuario['email'];
    $nombres = $usuario['nombres'];
    $password1 = $usuario['password'];

}


if( ($contador > 0) && (password_verify($password, $password1))){
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion email'] = $email;
    header('Location: ' . $URL . '/index.php');
}else{
    echo "Acceso denegado, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Acceso denegado";
    header('Location: ' . $URL . '/login');
}
