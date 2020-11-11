<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <?php  require_once "../includes/head.php" ?>
    <title>Document</title>
</head>

<body>
    <?php
 $page = '../crud_usuarios/usuarios';
 if (isset($_SESSION['loggedin'])) { 
  $_SESSION['expire'] = $_SESSION['start'] + (2 * 60) ;
  }
else {
  echo "<div class='alert alert-danger mt-4' role='alert'>
  <h4>Necesitas estar logueado para acceder a esta pagina.</h4>
  <p><a href='../login.php'>Acceda haciendo click aqui!</a></p></div>";
  session_destroy();
  exit;
}
// checking the time now when check-login.php page starts
$now = time();           
if ($now > $_SESSION['expire']) {
  echo "<div class='alert alert-danger mt-4' role='alert'>
  <h4>Tu sesion expiro!</h4>
  <p><a href='../login.php'>Login Here</a></p></div>";
  session_destroy();
  exit;
  }
  
  require_once '../conn.php';
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  // Variables
  $hostDB =         $dbhost;
  $nombreDB =       $dbname;
  $usuarioDB =      $dbuser;
  $contrasenyaDB =  $dbpass;

  $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
  $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

  // Prepara SELECT
  $miConsulta = $miPDO->prepare('SELECT email,password, nombre, apellido,edad FROM usuarios;');
  // Ejecuta consulta
  $miConsulta->execute();


$page = 'usuarios';
?>
    <?php require_once "../includes/encabezado.php"?>
    <?php 
    if (isset($_POST['cerrar_sesion']))
	{
		unset($_SESSION);
        header("location:../login.php");
        $conn->close();
        
}
  ?>
    <h1>Bienvenidos a la administracion de usuarios</h1>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th scope="col">Alta de usuarios</th>
                    <th scope="col">Alta de Permisos</th>
                    <th scope="col">Alta de Roles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalusuarios">Nuevo Usuario</button></a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalpermisos">Nuevo permiso</button></a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary botoningresar" data-toggle="modal"
                            data-target="#modalroles">Nuevo Rol</button></a>
                    </td>

                </tr>
            </tbody>
        </table>

        <div class="table-responsive">
            <table class="table table-bordered">
                <th>Modificacion de usuarios</th>
                <tr>
                    <td><a> <?php  require_once "mostrar.php"?></a></td>
                </tr>
            </table>
        </div>
        <!-- Modal alta de usuario -->
        <div class="modal fade" id="modalusuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                            <th class="table-dark" scope="row">Nombre:</th>
                                            <td class="bg-info"><input type="text" name="nombre"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Apellido:</th>
                                            <td class="bg-info"><input type="text" name="apellido"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Edad:</th>
                                            <td class="bg-info"><input type="number" name="edad"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Email:</th>
                                            <td class="bg-info"><input type="text" name="email"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Password:</td>
                                            <td class="bg-info"><input type="text" name="password"></td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <button class="botoningresar" onclick="alert('Usuario agregado')" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Usuario</button></p>
                            <button class="botoningresar" onclick="window.location.href='usuarios.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de alta de permisos -->
        <div class="modal fade" id="modalpermisos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <form method='post' action='administrar_permisos.php'>
                            <div class="table-responsive">
                                <table class="table tablaingresar ">
                                    <tbody>
                                        <tr>
                                            <th class="table-dark" scope="row">Email:</th>
                                            <td class="bg-info"><input type="text" name="email"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Rol:</th>
                                            <td class="bg-info"><input type="text" name="tipo_rol"></td>
                                        </tr>
                                        <tr>
                                            <th class="table-dark" scope="row">Accion:</th>
                                            <td class="bg-info"><input type="text" name="accion"></td>
                                        </tr>
                                        <input type="hidden" name="insertar" value='insertar'>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <button class="botoningresar" onclick="window.location.href='usuarios.php'" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Permiso</button></p> -->
                                <button class="botoningresar" onclick="window.location.href='usuarios.php'" type="submit"
                                value='insertar' class="btn btn-primary btn-sm">Crear Permiso</button></p>
                            <button class="botoningresar" onclick="window.location.href='usuarios.php'"
                                class="btn btn-primary btn-sm" data-dismiss="modal">Volver</button></p>
                            <!-- <button href="usuarios.php" type="submit" >volver</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
                <!-- Modal de alta de Tiporol -->
                <div class="modal fade" id="modalroles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                <form method='post' action='administrar_roles.php'>
                                    <div class="table-responsive">
                                        <table class="table tablaingresar ">
                                            <tbody>
                                                <tr>
                                                    <th class="table-dark" scope="row">Tipo Rol:</th>
                                                    <td class="bg-info"><input type="text" name="idrol"></td>
                                                </tr>
                                                <input type="hidden" name="insertar" value='insertar'>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <button class="botoningresar" onclick="window.location.href='usuarios.php'" type="submit"
                                        value='insertar' class="btn btn-primary btn-sm">Crear Permiso</button></p> -->
                                        <button class="botoningresar" onclick="window.location.href='usuarios.php'" type="submit"
                                        value='insertar' class="btn btn-primary btn-sm">Crear Rol</button></p>
                                    <button class="botoningresar" onclick="window.location.href='usuarios.php'"
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
        <script>
                // Modal Permisos

                $('#modalpermisos').on('show.bs.modal', function(event) {
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
                // Modal Roles

                $('#modalroles').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        
        </script>
        <?php require_once "../includes/footer.php" ?>
</body>

</html>