<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos al bankend</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Ingreso al back-office</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">

                <h3>Create an account</h3>

                <form method="POST" action="create-account.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="apellido" placeholder="Ingresa tu apellido"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="edad" placeholder="Ingresa tu edad" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                            placeholder="Ingresa tu correo" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Ingresa tu password"
                            required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block create-account">Create mi cuenta</button>
                </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h3>Login</h3>

                <p>¿Tienes una cuenta? <button onclick="window.location.href='login.php'" type="button"
                        class="btn btn-primary btn-sm">Inicia sesion aqui!</button></p>
            </div>
        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>

</body>

</html>