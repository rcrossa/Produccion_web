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
    <div class="table">
        <table class="table-bordered">
            <thead>
                <tr>
                    <th scope="col">Alta de producto</th>
                    <th scope="col">Alta Continentes</th>
                    <th scope="col">Alta Paises</th>
                    <th scope="col">Alta Ciudades</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalproductos">Nuevo Producto</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalcontinentes">Nuevo Continente</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalpaises">Nuevo Pais</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalciudades">Nueva Ciudad</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="table-responsive">
            <table class="table table-bordered">
                <th>Administrar Producto</th>
                <tbody>
                    <tr>
                        <td><a> <?php  require_once "mostrar.php"?></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Modal alta de Productos -->
        <div class="modal fade" id="modalproductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action='administrar_producto.php'>
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                    <tr>
                                            <th class="table-dark" scope="row">id producto:</th>
                                            <td class="bg-info"><input type="number" name="idproducto"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">id ciudad:</th>
                                            <td class="bg-info"><input type="text" name="idciudad"></td>
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
                            <button class="botoningresar" onclick="alert('Producto agregado')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Producto</button></p>
                            <button class="botoningresar" onclick="window.location.href='productos.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Continentes de Productos -->
        <div class="modal fade" id="modalcontinentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Continente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action='administrar_continente.php'>
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                        <tr>
                                            <th class="table-dark" scope="row">id :</th>
                                            <td class="bg-info"><input type="text" name="idcontinente"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">nombre:</th>
                                            <td class="bg-info"><input type="text" name="nombrecontinente"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Activo:</td>
                                            <td class="bg-info"><input type="number" name="activo"></td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Continente agregado')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Continente</button></p>
                            <button class="botoningresar" onclick="window.location.href='productos.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Paises de Productos -->
        <div class="modal fade" id="modalpaises" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Pais</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action='administrar_pais.php'>
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                        <tr>
                                            <th class="table-dark" scope="row">id :</th>
                                            <td class="bg-info"><input type="text" name="idpais"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">nombre:</th>
                                            <td class="bg-info"><input type="text" name="nombrepais"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">continente:</th>
                                            <td class="bg-info"><input type="text" name="idcontinente"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Activo:</td>
                                            <td class="bg-info"><input type="number" name="activo"></td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Pais agregado')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Pais</button></p>
                            <button class="botoningresar" onclick="window.location.href='productos.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ciudades de Productos -->
        <div class="modal fade" id="modalciudades" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva Ciudad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action='administrar_ciudad.php'>
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                        <tr>
                                            <th class="table-dark" scope="row">id :</th>
                                            <td class="bg-info"><input type="text" name="idciudad"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">nombre:</th>
                                            <td class="bg-info"><input type="text" name="nombreciudad"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">pais :</th>
                                            <td class="bg-info"><input type="text" name="idpais"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Activo:</td>
                                            <td class="bg-info"><input type="number" name="activo"></td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Ciudad agregada')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Continente</button></p>
                            <button class="botoningresar" onclick="window.location.href='productos.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>






        <script>
        $('#modalproducto').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
        <script>
        $('#modalcontinentes').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
        <script>
        $('#modalpaises').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
        <script>
        $('#modalciudades').on('show.bs.modal', function(event) {
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