<?php

include 'conexion.php';


$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = mysqli_real_escape_string($conexion, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($conexion, $_POST['password']);

    if (!$email) {
        $errores[] = "El Correo es obligatorio o no es valido";
    }
    if (!$password) {
        $errores[] = "El Password es obligatorio o no es valido";
    }

    if (empty($errores)) {
        $query = "SELECT * FROM usuarios WHERE correo = '$email'";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado->num_rows) {
            //revisar si password es correcto 

            $usuario = mysqli_fetch_assoc($resultado);

            //verificar si es correcto o no

            $auth = password_verify($password, $usuario['contrasena']);

            if ($auth) {
                session_start();

                $_SESSION['usuario'] = $usuario['correo'];
                $_SESSION['login'] = true;

                header('Location: index.php');
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El correo no existe";
        }
    }
}

?>

<?php
include 'token.php';
require_once('header.php');

?>

<main class="contenedor">
    <div class="marco">
        <form class="formulario" method="POST">
            <fieldset>
                <div class="bienvenida centrar-texto">
                    <h1>Bienvenido al Sistema de Administracion CAPIC</h1>
                    <p>Aquí podras administrar Aportaciones o Prestamos de tus Miembros!</p>

                    <h1>Introduzca las claves de acceso</h1>

                    <?php

                    foreach ($errores as $error) :
                    ?>
                        <div class="alerta-error">
                            <?php echo $error; ?>
                        </div>

                    <?php endforeach; ?>
                </div>
                <label for="email">
                    <p class="label">Correo: </p>
                </label>
                <div class="campo">
                    <input type="email" placeholder="Correo" id="email" name="email" class="campo__field" />
                </div>
                <label for="password">
                    <p class="label">Contraseña: </p>
                </label>
                <div class="campo">
                    <input class="campo__field" type="password" placeholder="Contraseña" id="password" name="password" />
                </div>
                <input type="submit" value="Entrar" class="boton boton--primario" />
            </fieldset>
        </form>
    </div>
</main>

<?php require_once('footer.php'); ?>