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

       // Connection info. file
       include 'conn.php';
       include 'check-'

       // Connection variables
       $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

       $page = 'index';
       
       if (isset($_SESSION['loggedin'])) { 
        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;
        }
    else {
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Necesitas estar logueado para acceder a esta pagina.</h4>
        <p><a href='./login.php'>Acceda haciendo click aqui!</a></p></div>";
        exit;
    }
    // checking the time now when check-login.php page starts
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Tu sesion expiro!</h4>
        <p><a href='./login.php'>Login Here</a></p></div>";
        exit;
        }


        // Query sent to database
              $result = mysqli_query($conn, "SELECT user.nombre as nombre, 
              user.apellido as apellido, user.email as email, rol.tipo_rol as tipo_rol,
              rol.accion as accion 
              from usuarios user, roles rol 
              where rol.email = user.email and user.email= '$_SESSION[$email]'");
              // Variable $row hold the result of the query
              $row = mysqli_fetch_assoc($result);                        
              var_dump($row);

$page = 'index';
// require_once "includes/encabezado.php" 

?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand">Delfos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li <?php echo ($page == 'usuarios') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2">
        <a class="nav-link" href="crud_usuarios/usuarios.php">Usuarios</a>
      </li>
      <li <?php echo ($page == 'productos') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2">
        <a class="nav-link" href="crud_productos/productos.php">Catalogo de productos</a>
      </li>
      <form name="cerrar-sesion" class="form-inline my-2 my-lg-0">
                    <button onclick="window.location.href='../Login/logout.php'" type="button"
                        class="btn btn-dark my-2 my-sm-0" type="submit" value="cerrar_sesion">Logout</button>
                </form>
    </ul>
  </div>
</nav>
    
<?php  
 if (isset($_POST['cerrar_sesion']))
{
 unset($_SESSION);

     session_destroy();
     header("location:../login.php");
     
}

$conn->close();
            ?>
        
        <?require_once "includes/footer.php";
        ?>
    
</body>
</html>