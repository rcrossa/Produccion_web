<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>Document</title>
</head>

<body>
<?php
    if (isset($_SESSION['loggedin'])) {  
    }
    else {
        // session_unset();
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Necesitas estar logueado para acceder a esta pagina.</h4>
        <p><a href='login.php'>Acceda haciendo click aqui!</a></p></div>";
        exit;
    }
    // checking the time now when check-login.php page starts
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Tu sesion expiro!</h4>
        <p><a href='login.php'>Login Here</a></p></div>";
        
        }
    ?>

    <div class="container">
        <p id="nombre-perfil"><img src="../images/logo_delfos.png" alt="..." class="img-thumbnail">Bienvenido:
            <?php echo $_SESSION['Nombre']; ?></p>
        <h3 id="titulo-edit-profile">Edit your profile</h3>
        <ul class="ul-edit-profile">
            <li class="li-edit-profile"><button onclick="window.location.href=''" type="button"
                    class="btn btn-primary btn-sm">Cambiar imagen</button>
            </li>
            <li class="li-edit-profile"><button onclick="window.location.href=''" type="button"
                    class="btn btn-primary btn-sm">Cambiar bio</button>
            </li class="li-edit-profile">
            <li class="li-edit-profile"><button onclick="window.location.href=''" type="button"
                    class="btn btn-primary btn-sm">Cambiar password</button>
            </li>

        </ul>
        <p class="logout"><a href="logout.php">Logout</a></p>
    </div>
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