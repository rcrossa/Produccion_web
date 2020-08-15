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
        
        // data sent from form login.php
        $email = $_POST['email']; 
        $password = $_POST['password'];
        
        // Query sent to database
        $result = mysqli_query($conn, "SELECT Email, Password, Nombre FROM users WHERE Email = '$email'");
        
        // Variable $row hold the result of the query
        $row = mysqli_fetch_assoc($result);
        
        // Variable $hash hold the password hash on database
        $hash = $row['Password'];
        
        /* 
        password_Verify() function verify if the password entered by the user
        match the password hash on the database. If everything is OK the session
        is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
        */
        if (password_verify($_POST['password'], $hash)) {	
            
            $_SESSION['loggedin'] = true;
            $_SESSION['Nombre'] = $row['Nombre'];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (1 * 600) ;						
            
            echo "<div class='alert alert-success mt-4' role='alert'><strong>Welcome!</strong> $row[Nombre]			
            <p><a href='edit-profile.php'>Edit Profile</a></p>	
            <p><a href='logout.php'>Logout</a></p></div>";	
        
        } else {
            echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
            <p><a href='login.php'><strong>Please try again!</strong></a></p></div>";			
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