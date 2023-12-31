<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tatuajes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>

    <?php include './config/db.php'; ?>

    <?php

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
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado->num_rows) {
            //revisar si password es correcto 

            $usuario = mysqli_fetch_assoc($resultado);

            //verificar si es correcto o no

            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                session_start();

                $_SESSION['usuario'] = $usuario['correo'];
                $_SESSION['role'] = $usuario['role'];
                $_SESSION['login'] = true;

                header('Location: citas.php');
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El correo no existe";
        }
    }
}

?>

    <main class="container w-75 bg-dark mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6"></div>

            <div class="col p-5 rounded-end">

                <h2 class="fw-bold text-white text-center py-5">Bienvenido!</h2>
                <form class="text-white" id ="login-form" method ="POST">
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    </div>
                 
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Sign In</button>
                    </div>
                    <div class="my-3">
                        <span>No register? <button type ="button" id= "signup-btn" class="btn btn-link"> sign up </button>
                        </span>
                    </div>
                </form>

                <form class="text-white d-none" method="POST" id="signup-form" >
                <?php

                foreach ($errores as $error) :
                ?>
                    <div class="alerta-error">
                        <?php echo $error; ?>
                    </div>

                <?php endforeach; ?>
                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Sign In</button>
                    </div>
                    <div class="my-3">
                    <span>already registered? <button type ="button" id= "signup-btn" class="btn btn-link"> sign in </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </main>


    <script src= "./js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>