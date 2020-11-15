<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>Inicio de sesion</title>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="loginBox">
                        <img src="css/images/logo_delfos.png" class="img-responsive" alt="PHP MySQL logos">
                        <h2>Login</h2>

                        <form action="check-login.php" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" name="password"
                                    placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </form>
                        <!-- Collapse a form when user click Lost your password? link-->
                        <p><a href="#showForm" data-toggle="collapse" aria-expanded="false"
                                aria-controls="collapse">¿Olvidaste tu clave?</a></p>
                        <div class="collapse" id="showForm">
                            <div class='well'>
                                <form action="password-recovery.php" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter the email associated with the password." required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Recuperar tu clave</button>
                                </form>
                            </div>
                        </div>

                        <hr>
                        
                        <p>¿Tienes que crear una cuenta? <button onclick="window.location.href='Formulariodealta.php'" type="button" class="btn btn-primary btn-sm">Click aqui!</button></p>
                    </div><!-- /.loginBox -->
                </div><!-- /.card -->
            </div><!-- /.col -->
        </div>
        <!--/.row-->
    </div><!-- /.container -->

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