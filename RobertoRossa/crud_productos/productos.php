<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../includes/head.php" ;?>
    <title>Document</title>
</head>

<body>
<?php 
    $page = 'productos';
    require_once "../includes/encabezado.php"; ?>
    <header>
        <h1>Bienvenidos a la administracion de Productos</h1>
    </header>
    <div class="table-responsive">
    <table class="table table-bordered">
        <tr>
        <td><a> <?php  require_once "alta.php"?> </a></td>
            <!-- <td><a href="ingresar.php">Ingresar</a></td> -->
        </tr>
        <th>Administrar Productos</th>
        <tr>
        <td><a> <?  require_once "mostrar.php"?></a></td>
            <!-- <td><a href="mostrar.php">ver</a></td> -->
        </tr>
    </table>
    </div>
    <!-- <footer>
    administrar usuario
    </footer> -->
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