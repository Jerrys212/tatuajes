<?php

session_start();

$auth = ['login' => $_SESSION['login'], 'role' => $_SESSION['role']];

if (!$auth || $auth['role'] !== 'admin') {
    header("Location: ./insertar.php");
    exit;
}


?>
