<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delfos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			
			<?php
			include 'conn.php';
			
			$email = $_POST['email'];				
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
				
			$sql = "SELECT Email, Password FROM usuarios WHERE email='$email'";				
			$result = mysqli_query($conn, $sql);
				
			if (mysqli_num_rows($result) > 0) {				
				$row = mysqli_fetch_assoc($result);
				
				$subject = "Su contraseña para su login";
				$body = "Su contraseña es:" . $row['Password'];
				
				$headers = 'From: youremail@mail.com' . "\r\n" .
				'Reply-To: roberto.rossa@davinci.edu.ar' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				
				mail($email, $subject, $body, $headers);				
				
				echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>
				<p>Email enviado! Por favor verifique su correo.</p>
				<p><a class='alert-link' href=login.php>Login</a></p></div>";
			} else {
				echo "Disculpe. Su email no se encuentra registrado en nuestra base.";
			}
			?>
		</div>
	</div>
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