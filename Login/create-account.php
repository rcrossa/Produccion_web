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

include 'conn.php';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// Query to check if the email already exist
$checkEmail = "SELECT * FROM users WHERE Email = '$_POST[email]' ";

// Variable $result hold the connection data and the query
$result = $conn-> query($checkEmail);

// Variable $count hold the result of the query
$count = mysqli_num_rows($result);

// If count == 1 that means the email is already on the database
if ($count == 1) {
echo "<div class='alert alert-warning mt-4' role='alert'>
                <p>That email is already in our database.</p>
                <p><a href='login.php'>Please login here</a></p>
            </div>";
} else {	

/*
If the email don't exist, the data from the form is sended to the
database and the account is created
*/

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad =$_POST['edad'];
$email = $_POST['email'];
$user_id =$_POST['user_id'];
$pass = $_POST['password'];


// The password_hash() function convert the password in a hash before send it to the database
$passHash = password_hash($pass, PASSWORD_DEFAULT);

// Query to send Name, Email and Password hash to the database


$sql = "INSERT INTO users (nombre, apellido, edad, email, user_id, password) VALUES ('$nombre',
'$apellido','$edad','$email','$user_id','$passHash')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success mt-4' role='alert'><h3>Your account has been created.</h3>
    <a class='btn btn-outline-primary' href='login.php' role='button'>Login</a></div>";		
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }	
}	
mysqli_close($conn);
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