<?php

// //importar la conexion

// include '../config/db.php';

// //email - password

// $email = "admin@gmail.com";
// $password = "admin456";
// $passwordHaseado = password_hash($password, PASSWORD_BCRYPT);
// $role = "admin";

// //query para crear el usario

// $query = "INSERT INTO usuarios (email, password, role) VALUES ('$email', '$passwordHaseado', '$role')";

// echo $query;

// $sql = mysqli_query($conexion, $query);

// echo $sql;


//importar la conexion

include '../config/db.php';

//email - password

$email = "user@gmail.com";
$password = "user456";
$passwordHaseado = password_hash($password, PASSWORD_BCRYPT);
$role = "user";

//query para crear el usario

$query = "INSERT INTO usuarios (email, password, role) VALUES ('$email', '$passwordHaseado', '$role')";

echo $query;

$sql = mysqli_query($conexion, $query);

echo $sql;

