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
 if ($_SESSION['loggedin'] == true && $_SESSION['tipo_rol']=="admin") { 
    $_SESSION['loggedin'] = true;
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
                    <th scope="col">Alta Campo Dinamico</th>
                    <th scope="col">Alta Campo Dinamico Comentarios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalproductos">Nuevo Producto</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalproductos">Nuevo Campo</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalcontinentes">Nuevo Continente</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalpaises">Nuevo Pais</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalcampos">Nuevo Campo Dinamico</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalcomentariosdinamicos">Nuevo Campo Dinamico Comentarios</button></a>
                    </td>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalfoto">Nuevo foto</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <h2>Administrar Producto</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
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
                        <form method='post' action='administrar_producto.php' enctype="multipart/form-data">
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
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
                                            <th class="table-dark" scope="row">Foto:</td>
                                            <td class="bg-info"><input type="text" name="url"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Destacado:</td>
                                            <td class="bg-info"><input type="number" name="destacado"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Activo:</td>
                                            <td class="bg-info"><input type="number" name="activo"></td>
                                        </tr>
                                        <tr>
                                        <input type="hidden" name="tamano_archivo" value="50000" />
                                            <th class="table-dark" scope="row">Archivo:</td>
                                            <td class="bg-info">
                                            <input type="file" name ="userfile" class="custom-file-input" id="userfile">
                                             <label class="custom-file-label" for="userfile" aria-describedby="userfile">Subi Foto de tu DNI</label>
                                            </td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                        <input type="hidden" name="imagen" value='userfile'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Producto agregado')" type="submit"
                                value='enviar' class="btn btn-primary btn-sm">Crear Producto</button></p>
                            <button class="botoningresar" onclick="window.location.href='productos.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- Modal alta de fotos -->
        <div class="modal fade" id="modalfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <form method='POST' action='administrar_productofoto.php' enctype="multipart/form-data">
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                        <tr>
                                        <b>Campo de tipo texto:</b> 
                                        <br>
                                        <input type="text" name="cadenatexto" size="20" maxlength="100">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                        <br>
                                        <br>
                                        <b>Enviar un nuevo archivo: </b>
                                        <br>
                                        <input name="userfile" type="file">
                                        <br>
                                        <input type="submit" value="Enviar">
                                        </tr>

                                        <!-- <input type="hidden" name="imagen" value='userfile'> -->
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('foto agregada')" type="submit"
                                value='enviar' class="btn btn-primary btn-sm">Subir Imagen</button></p>
                            <button class="botoningresar" onclick="window.location.href='productos.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
                <!-- Modal alta de Campos -->
                <div class="modal fade" id="modalcampos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Campo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action='campos_dinamicos/administrar_campo.php'>
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                        <tr>
                                            <th class="table-dark" scope="row">Id Producto:</th>
                                            <td class="bg-info"><input type="number" name="id_producto"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Label:</th>
                                            <td class="bg-info"><input type="text" name="label"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Activo:</th>
                                            <td class="bg-info"><input type="number" name="activo"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Data:</th>
                                            <td class="bg-info"><input type="text" name="data"></td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Campo agregado')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Campo</button></p>
                            <button class="botoningresar" onclick="window.location.href='../productos.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
 <!-- Modal alta de Comentarios dinamicos -->
      <div class="modal fade" id="modalcomentariosdinamicos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Campo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action='../comentarios/administrar_comentarios_dinamico.php'>
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                        <tr>
                                            <th class="table-dark" scope="row">Id Producto:</th>
                                            <td class="bg-info"><input type="number" name="producto_id"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Label:</th>
                                            <td class="bg-info"><input type="text" name="label"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Activo:</th>
                                            <td class="bg-info"><input type="number" name="activo"></td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Campo agregado')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Campo</button></p>
                            <button class="botoningresar" onclick="window.location.href='../index.php'"
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
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Ciudad agregada')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Ciudad</button></p>
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
            modal.find('.modal-title').text('Agregar un producto ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
        <script>
        $('#modalfoto').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Agregar un foto ' + recipient)
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
            modal.find('.modal-title').text('Agregar un continente ' + recipient)
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
            modal.find('.modal-title').text('Agregar un pais ' + recipient)
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
            modal.find('.modal-title').text('Agregar una ciudad ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
     <script>
        $('#modalcampos').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Agregar una campo ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
             <script>
        $('#modalcomentariosdinamicos').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Agregar una campo ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
        <?php
require_once "../includes/footer.php";
?>
</body>

</html>