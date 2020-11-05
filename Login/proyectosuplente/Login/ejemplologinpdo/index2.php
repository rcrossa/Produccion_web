<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'usuario.entidad.php';
        require_once 'usuario.model.php';
        
        //logica

        $usr = new Usuario();
        $model = new UsuarioModel();


        if (isset($_REQUEST['action'])) {
            switch ($_REQUEST['action']) {
                case 'actualizar':
                    $usr->__SET('nombre  ', $_REQUEST['nombre  ']);
                    $usr->__SET('apellido', $_REQUEST['apellido']);
                    $usr->__SET('edad    ', $_REQUEST['edad    ']);
                    $usr->__SET('email   ', $_REQUEST['email   ']);
                    $usr->__SET('user_id ', $_REQUEST['user_id ']);
                    $usr->__SET('password', $_REQUEST['password']);
                    $usr->__SET('perfil  ', $_REQUEST['perfil  ']);
                    $model->actualizar($usr);
                    header('location: test.php');
                    break;
                case 'registrar':
                    $usr->__SET('nombre  ', $_REQUEST['nombre  ']);
                    $usr->__SET('apellido', $_REQUEST['apellido']);
                    $usr->__SET('edad    ', $_REQUEST['edad    ']);
                    $usr->__SET('email   ', $_REQUEST['email   ']);
                    $usr->__SET('user_id ', $_REQUEST['user_id ']);
                    $usr->__SET('password', $_REQUEST['password']);
                    $usr->__SET('perfil  ', $_REQUEST['perfil  ']);
                    $model->registrar($usr);
                    header('location: test.php');
                break;
                case 'eliminar':
                    $model->Eliminar($_REQUEST['id']);
                    header('location: test.php');
                break;
                case 'editar':
                    $usr = $model->obtener($_REQUEST['id']);
                break;
                default:
                    # code...
                    break;
            }
        }
    ?>

<div class="pure-g">
            <div class="pure-u-1-12">

                <form action="?action=<?php echo $usr->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="id" value="<?php echo $usr->__GET('id'); ?>" />

                    <table >
                        <tr>
                            <th >nombre</th>
                            <td><input type="text" name=nombre" value="<?php echo $usr->__GET('nombre'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >apellido</th>
                            <td><input type="text" name="apellido" value="<?php echo $usr->__GET('apellido'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Edad</th>
                            <td><input type="number" name="edad" value="<?php echo $usr->__GET('edad'); ?>"  /></td>
                        </tr>
                        <tr>
                        <tr>
                            <th >email</th>
                            <td><input type="text" name="email" value="<?php echo $usr->__GET('email'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >user_id</th>
                            <td><input type="text" name="user_id" value="<?php echo $usr->__GET('user_id'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >password</th>
                            <td><input type="text" name="password" value="<?php echo $usr->__GET('password'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >perfil</th>
                            <td><input type="text" name="perfil" value="<?php echo $usr->__GET('perfil'); ?>"  /></td>
                        </tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >nombre  </th>
                            <th >apellido</th>
                            <th >edad    </th>
                            <th >email   </th>
                            <th >user_id </th>
                            <th >password</th>
                            <th >perfil  </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nombre  '); ?></td>
                            <td><?php echo $r->__GET('apellido'); ?></td>
                            <td><?php echo $r->__GET('edad    '); ?></td>
                            <td><?php echo $r->__GET('email   '); ?></td>
                            <td><?php echo $r->__GET('user_id '); ?></td>
                            <td><?php echo $r->__GET('password'); ?></td>
                            <td><?php echo $r->__GET('perfil  '); ?></td>
                            <td>
                                <a href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     

            </div>
        </div>

</body>
</html>