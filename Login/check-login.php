<?php
session_start();

?>
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
   
       // Connection info. file
        include 'conn.php';	
        
        // Connection variables
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        

        // Check connection
        if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());            
                }
        if(isset($_POST['email'])){
            // data sent from form login.php
            $email = $_POST['email']; 
        }
        if(isset($_POST['password'])){
            // data sent from form login.php
            $password = $_POST['password'];
        }
                
                        // Query sent to database
                        $result = mysqli_query($conn, "SELECT user.nombre as nombre, 
                        user.apellido as apellido, user.email as email, user.password as password, rol.tipo_rol as tipo_rol,
                        rol.accion as accion 
                        from usuarios user, roles rol 
                        where rol.email = '$email'
                        AND user.email='$email'
                        GROUP by 1");
                        // Variable $row hold the result of the query
                        $row = mysqli_fetch_assoc($result);                        
                        // Variable $hash hold the password hash on database
                        $hash = $row['password']; 
                        // $hash = $password;                   
                                          
                        
                            if (password_verify($password, $hash)){
                                // if (isset($row['password'], $hash)){
                                //valido que tipo de perfil, usuario o administrador. asigno datos.
                                                if(isset($row['password'])){
                                                    $_SESSION['loggedin'] = true;
                                                    $_SESSION['nombre'] = $row['nombre'];
                                                    $_SESSION['email'] = $row['email'];
                                                    $_SESSION['password'] = $row['password'];
                                                    $_SESSION['tipo_rol'] = $row['tipo_rol'];
                                                    $_SESSION['accion'] = $row['accion'];
                                                    $_SESSION['start'] = time();
                                                    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;						
                                                            if($_SESSION['tipo_rol']=="usuarios"){
                                                                echo "<div class='alert alert-success mt-4' role='alert'><strong>Bienvenido $row[tipo_rol] $row[apellido]</strong>			
                                                                <p><a href='Panelusuario/index.php'>Ir al panel de usuarios</a></p>
                                                                <p><a href='logout.php'>Logout</a></p></div>";
                                                                }elseif($_SESSION['tipo_rol']=="admin" || $_SESSION['accion']== "editar"){                                                                    
                                                                $_SESSION['loggedin'] = true;
                                                                $_SESSION['nombre'] = $row['nombre'];
                                                                $_SESSION['email'] = $row['email'];
                                                                $_SESSION['password'] = $row['password'];
                                                                $_SESSION['tipo_rol'] = $row['tipo_rol'];
                                                                $_SESSION['accion'] = $row['accion'];
                                                                $_SESSION['start'] = time();
                                                                $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;	
                                                                
                                                                echo "<div class='alert alert-success mt-4' role='alert'>
                                                                <strong>Bienvenido $row[tipo_rol]</strong> $row[nombre]			
                                                                <p><a href='crud_usuarios/usuarios.php'>Ir al Backend</a></p>	
                                                                <p><a href='logout.php'>Logout</a></p></div>";
                                                                }else {
                                                                    echo "<div class='alert alert-success mt-4' role='alert'>
                                                                    <strong>Bienvenido! </strong> $row[nombre]	
                                                                    <strong>Debe solicitar al administrador que le asigne un tipo de perfil</strong>
                                                                    <p><a href='logout.php'>Logout</a></p></div>";
                                                                    } 

                                                        } 

                                                }else {
                                                    echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
                                                    <p><a href='login.php'><strong>Please try again!</strong> </a></p></div>
                                                    
                                                    ";	
                                                        
                                                        
                                                      	
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
