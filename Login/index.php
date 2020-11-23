<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comentarios/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
       $page = 'index';

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
      <li <?php echo ($page == 'index') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2">
        <a class="nav-link" href="index.php">Comentarios </span></a>
      </li>
      <li <?php echo ($page == 'usuarios') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2">
        <a class="nav-link" href="crud_usuarios/usuarios.php">Usuarios</a>
      </li>
      <li <?php echo ($page == 'productos') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2">
        <a class="nav-link" href="crud_productos/productos.php">Catalogo de productos</a>
      </li>
    </ul>
  </div>
</nav>
<h1>Bienvenidos a la administracion de Comentarios</h1>
<h2>Comentarios Aprobados</h2>
<?php require_once ('comentarios/mostrar.php');?>
<h2>Comentarios Pendientes de Aprobación</h2>
<?php require_once ('comentarios/mostrar1.php');?>
        <?require_once "includes/footer.php";        ?>
    
</body>
</html>