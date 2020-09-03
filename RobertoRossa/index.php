<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "includes/head.php" ; ?>
    <title>Document</title>
</head>
<body>
<?php
// $page = 'index';
// require_once "includes/encabezado.php" 

?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Delfos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- <li <?php echo ($page == 'index') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2"> -->
      <li>
        <a class="nav-link" href="index.php">Home </span></a>
      </li>
      <!-- <li <?php echo ($page == 'usuarios') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2"> -->
      <li>
        <a class="nav-link" href="crud_usuarios/usuarios.php">Usuarios</a>
      </li>
      <!-- <li <?php echo ($page == 'productos') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2"> -->
      <li>
        <a class="nav-link" href="crud_productos/productos.php">Catalogo de productos</a>
      </li>
    </ul>
  </div>
</nav>
    

        
        <?require_once "includes/footer.php";
        ?>
    
</body>
</html>