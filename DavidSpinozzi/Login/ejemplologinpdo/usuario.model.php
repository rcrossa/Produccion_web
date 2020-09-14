<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php

 class UsuarioModel{
     private $pdo;

     public function __CONSTRUCT()
     {
        // $dsn= 'mysql:dbname=produccion_web;host=localhost';
        // $usuario ='root1';
        // $pass= 'Educacion1';
         try {
             $this->pdo = new PDO('mysql:dbname=produccion_web;host=localhost','root1','Educacion1');
         } catch (Exception $e) {
             die($e->getMessage());
         }
     }
     public function Listar()
     {
         try {
             $result = array();
             $stm = $this->pdo->prepare("select id,nombre,apellido,edad,email,user_id,password,perfil from users");
             $stm->execute();
             
             foreach($stm->fetchALL(PDO::FETCH_OBJ)as $r)
             {
                $usr = new Usuario();
                $usr->__SET('id'  ,$r-> id  );
                $usr->__SET('nombre'  ,$r-> nombre  );
                $usr->__SET('apellido',$r-> apellido);
                $usr->__SET('edad'    ,$r-> edad    );
                $usr->__SET('email'   ,$r-> email   );
                $usr->__SET('user_id' ,$r-> user_id );
                $usr->__SET('password',$r-> password);
                $usr->__SET('perfil'  ,$r-> perfil  );
                
                $result[] = $usr;

             }
             return $result;

         } catch (Exception $e) {
            die($e->getMessage());
         }
     }
     public function Obtener($id)
     {
         try {
             $usr = $this->pdo ->prepare("select id,nombre,apellido,edad,email,user_id,password,perfil from users where id=?");
             $usr -> execute(array($id));
             $r = $stm->fetch(PDO::FETCH_OBJ);

             $usr = new Usuario();
             $usr->__SET('id'  ,$r-> id  );
             $usr->__SET('nombre'  ,$r-> nombre  );
             $usr->__SET('apellido',$r-> apellido);
             $usr->__SET('edad'    ,$r-> edad    );
             $usr->__SET('email'   ,$r-> email   );
             $usr->__SET('user_id' ,$r-> user_id );
             $usr->__SET('password',$r-> password);
             $usr->__SET('perfil'  ,$r-> perfil  );

             return $usr;

         } catch (Exception $e) {
            die($e->getMessage());
         }
     }
     public function Eliminar($id){
         try {
             $usr = $this ->pdo ->prepare ("DELETE FROM alumnos where id= ?");
             $usr->execute(array($id));
         } catch (Exception $e) {
            die($e->getMessage());
         }
     }


     public function Actualizar(Usuario $data)
     {
         try {
             $sql = "UPDATE USERS SET
            nombre    =?,
            apellido  =?,
            edad      =?,
            email     =?,
            user_id   =?,
            password  =?,
            perfil    =?
            WHERE ID  = ?"; 
           
           $this->pdo->prepare($sql) ->execute(
               array(
                    $data->__GET('nombre  '),
                    $data->__GET('apellido'),
                    $data->__GET('edad    '),
                    $data->__GET('email   '),
                    $data->__GET('user_id '),
                    $data->__GET('password'),
                    $data->__GET('perfil  ')
               )
               );             
         } catch (Exception $e) {
            die($e->getMessage());
         }
     }
     public function Registrar(Usuario $data)
     {
         try {
             $sql ="INSERT INTO USERS(nombre,apellido,edad,email,user_id,password,perfil)values(?,?,?,?,?,?,?,)";
             $this->pdo->prepare($sql)
             ->execute(
                 array(
                    $data->__GET('nombre  '),
                    $data->__GET('apellido'),
                    $data->__GET('edad    '),
                    $data->__GET('email   '),
                    $data->__GET('user_id '),
                    $data->__GET('password'),
                    $data->__GET('perfil  ')
                 )
                 );
         } catch (Exception $e) {
            die($e->getMessage());
         }
     }
 }

?>

</div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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