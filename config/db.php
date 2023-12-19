<?php
$server = 'localhost';
$user = "root";
$pwd = "";
$bd = "tatuajes";

$conexion = new mysqli($server, $user, $pwd, $bd);
if (mysqli_connect_errno()) {
    echo "No conectado", mysqli_connect_error();
    exit();
}
