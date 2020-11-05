<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css">
    <title>Document</title>
</head>

<body>
    <?php
      

       if (isset($_SESSION['loggedin'])) { 
        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;
        }
    else {
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
        exit;
        }
        
        require_once 'conn.php';
       $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        // Variables
        $hostDB =         $dbhost;
        $nombreDB =       $dbname;
        $usuarioDB =      $dbuser;
        $contrasenyaDB =  $dbpass;
      
        $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
        $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

        // Prepara SELECT
        $miConsulta = $miPDO->prepare('SELECT nombre, apellido, edad, email FROM usuarios;');
        // Ejecuta consulta
        $miConsulta->execute();

    ?>

    <p><a class="button2"><?php require_once "nuevousuario.php" ;?></a></p>
    

    <div class="table-responsive">
    <table class="table table1">
        <thead class="table-dark">
            <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Email</th>
                <!-- <th scope="col">Usuario</th> -->
                <!-- <th scope="col">Clave</th> -->
                <!-- <th scope="col">¿Perfil?</th> -->
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($miConsulta as $clave => $valor): ?>
            <tr>
                <!-- <td><?= $valor['id']; ?></td> -->
                <td><?= $valor['nombre']; ?></td>
                <td><?= $valor['apellido']; ?></td>
                <td><?= $valor['edad']; ?></td>
                <td><?= $valor['email']; ?></td>
                <!-- <td><?= $valor['user_id']; ?></td> -->
                <!-- <td><?= $valor['password']; ?></td> -->
                <!-- <td><?= $valor['perfil'] ; ?></td> -->
                <!-- Se utilizará más adelante para indicar si se quiere modificar o eliminar el registro -->
                <td><button type="submit"><a class="button2"><?php require_once "modificar-accountadmin.php" ;?></a></button>
                </td>
                <!-- <td><a class="button1" href="modificar-accountadmin.php?email=<?= $valor['email'] ?>">Modificar</a></td> -->
                <td><a class="button1" href="borrar.php?email=<?= $valor['email'] ?>">Borrar</a></td>
            </tr>
            <?php endforeach; ?>
        <tbody>
    </table>
    </div>
    <?php
            $conn->close();
            ?>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>

</html>