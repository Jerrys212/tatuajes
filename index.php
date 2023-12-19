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


    <main class="container w-75 bg-dark mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6"></div>

            <div class="col p-5 rounded-end">

                <h2 class="fw-bold text-white text-center py-5">Bienvenido!</h2>
                <form class="text-white">
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" name="connected">
                        <label for="connected" class="form-check-label">Remember me</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Sign In</button>
                    </div>
                    <div class="my-3">
                        <span>No register? <a href="#"> sign up </a>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>