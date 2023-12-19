<?php
//Recibir datos y almacenar en variables
include("conexion.php");
$nombre = $_POST["nombre"];
$ap = $_POST["ap"];
$am = $_POST["am"];
$curp = $_POST["curp"];
$celular = $_POST["celular"];
$grupo = $_POST["grupo"];

//Consulta para insertar

$insertar = "INSERT INTO miembros (nombre, ap, am, curp, celular, grupo) VALUES ('$nombre','$ap','$am','$curp', '$celular','$grupo')";

//Ejecutar Consulta

$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo '<script src = "js/prueba.js"></script>';
} else {
    echo '<script type="text/javascript">alert("Error al ingresar miembro!");
		window.location.href = "miembros.php";</script>';
}
