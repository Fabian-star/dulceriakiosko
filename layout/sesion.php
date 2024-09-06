<?php

session_start();
if (isset($_SESSION['sesion email'])) {
    //echo "si existe sesion de".$_SESSION['sesion email'];
    $email_session = $_SESSION['sesion email'];
    $sql = "SELECT * FROM usuarios WHERE email='$email_session'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll( fetch_style: PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario){
       $nombres_sesion = $usuario['nombres'];

}
}else{
    echo "No existe";
    header('Location: ' . $URL . '/login');
}



?>