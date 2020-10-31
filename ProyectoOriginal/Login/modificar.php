<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>Document</title>
</head>

<body>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Alta de usuario</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creacion de usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <h3>Datos de usuario</h3>
                <form method="post" action="create-accountadmin.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="apellido" placeholder="Ingresa el apellido" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="edad" placeholder="Ingresa la edad" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingresa el correo" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_id" aria-aria-describedby="userlogin" placeholder="Ingresa el usuario" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Ingresa tu password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="perfil" aria-aria-describedby="perfil" placeholder="Ingresa tipo de perfil" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block create-account">Crear usuario</button>
                                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <!-- <button type="button" class="btn btn-primary">Crear usuario</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</body>

</html>