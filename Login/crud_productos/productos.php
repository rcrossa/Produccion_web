<?php
session_start();
?>
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
 if (isset($_SESSION['loggedin'])) { 
  $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;
  }
else {
  echo "<div class='alert alert-danger mt-4' role='alert'>
  <h4>Necesitas estar logueado para acceder a esta pagina.</h4>
  <p><a href='../login.php'>Acceda haciendo click aqui!</a></p></div>";
  exit;
}
// checking the time now when check-login.php page starts
$now = time();           
if ($now > $_SESSION['expire']) {
  session_destroy();
  echo "<div class='alert alert-danger mt-4' role='alert'>
  <h4>Tu sesion expiro!</h4>
  <p><a href='../login.php'>Login Here</a></p></div>";
  exit;
  }
  
  require_once '../conn.php';
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  // Variables
  $hostDB =         $dbhost;
  $nombreDB =       $dbname;
  $usuarioDB =      $dbuser;
  $contrasenyaDB =  $dbpass;

  $hostPDO ="mysql:host=$hostDB;dbname=$nombreDB";
  $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

  // Prepara SELECT
  $miConsulta = $miPDO->prepare('SELECT  idciudad,precio, descripcion, detalle, url, destacado, activo FROM productos;');
  // Ejecuta consulta
  $miConsulta->execute();


 ?>
<?php 
 require_once "../includes/encabezado.php";
?>

    
    <h1>Bienvenidos a la administracion de Productos</h1>
    <div class="table-responsive">
    <table class="table table-bordered">
    <th>Alta de producto</th>
        <tr>
        <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalproductos">Nuevo Producto</button></a>
        
        </tr>
        <th>Administrar Productos</th>
        <tr>
        <td><a> <?php  require_once "mostrar.php"?></a></td>
        </tr>
    </table>
    </div>
            <!-- Modal alta de usuario -->
            <div class="modal fade" id="modalproductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action='administrar_usuario.php'>
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                        <tr>
                                            <th class="table-dark" scope="row">id ciudad:</th>
                                            <td class="bg-info"><input type="text" name="precio"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Precio:</th>
                                            <td class="bg-info"><input type="number" name="precio"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Descripcion:</th>
                                            <td class="bg-info"><input type="text" name="descripcion"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Des/Detalle:</th>
                                            <td class="bg-info"><input type="text" name="detalle"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Url:</td>
                                            <td class="bg-info"><input type="text" name="ulr"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Destacado:</td>
                                            <td class="bg-info"><input type="number" name="destacado"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Activo:</td>
                                            <td class="bg-info"><input type="number" name="activo"></td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Usuario agregado')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Producto</button></p>
                            <button class="botoningresar" onclick="window.location.href='productos.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script>
    $('#modalusuarios').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
<?php
require_once "../includes/footer.php";
?>
</body>

</html>