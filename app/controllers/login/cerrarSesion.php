<?php

include ('../../config.php');

//CODIGO PARA CERRAR SESION EN EL SISTEMA
session_start();
if (isset($_SESSION['sesion email'])) {
    session_destroy();
    header('Location: ' . $URL . '/');
}