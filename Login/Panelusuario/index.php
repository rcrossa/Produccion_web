<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php

           // checking the time now when check-login.php page starts
    $now = time();       
    if ($now > $_SESSION['expire']) {

        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Tu sesion expiro!</h4>
        <p><a href='../login.php'>Login Here</a></p></div>";
        session_destroy();
        exit;
        }

       if (isset($_SESSION['loggedin'])) {         
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;
        
        require_once '../conn.php';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        $email = $_SESSION['email'];

        // Prepara SELEC
        $result = mysqli_query($conn, "SELECT ci.nombreciudad as nombreciudad, fecha,comentario,estrellas,email  FROM comentarios co, productos p, ciudades ci 
        WHERE co.idproducto = p.idproducto 
        AND p.idciudad = ci.idciudad 
        AND email='$email'");

        $page = 'index';

?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand">Delfos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li <?php echo ($page == 'index') ? "class='nav-item active px-3 py-2'" : ""; ?>
                    class="nav-item px-3 py-2">
                    <a class="nav-link" href="../../index.php">Ir la home </span></a>
                </li>
                <li <?php echo ($page == 'index') ? "class='nav-item active px-3 py-2'" : ""; ?>
                    class="nav-item px-3 py-2">
                    <a class="nav-link" href="index.php">Comentarios</a>
                </li>
                <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <button onclick="window.location.href='../../index.php'" type="button"
                        class="btn btn-dark my-2 my-sm-0" type="submit" value="cerrar_sesion">Logout</button>
                </form>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="table-responsive">
            <div class="table1" style="width:auto; height:220px; overflow:fixed;">
                <table class="table table-bordered tablamostrar1 " cellspacing="0" cellpadding="1">
                    <thead class="table-dark">
                        <th>Ciudad</th>
                        <th>Fecha</th>
                        <th>Comentario</th>
                        <th>Estrellas</th>
                        <th>Email</th>
                    </thead>
                    <tbody>
                        <?php foreach($result as $row):?>
                         <tr class="table-info">
                            <td><?php echo $row['nombreciudad'] ?></td>
                            <td><?php echo $row['fecha'] ?></td>
                            <td><?php echo $row['comentario'] ?></td>
                            <td><?php echo $row['estrellas'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            </tr>                       
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php
if (isset($_POST['cerrar_sesion'])){
 session_destroy();
 header("location:../login.php");
 $conn->close();
 exit;
}

}else {
  echo "<div class='alert alert-danger mt-4' role='alert'>
  <h4>Necesitas estar logueado para acceder a esta pagina.</h4>
  <p><a href='../login.php'>Acceda haciendo click aqui!</a></p></div>";
  session_destroy();
  exit;
  }
            ?>




</body>

</html>