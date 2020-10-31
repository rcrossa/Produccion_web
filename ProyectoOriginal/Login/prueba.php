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
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Email</th>
      <th scope="col">Usuario</th>
    </tr>
  </thead>
  <tbody>
  <?php
require_once "conn.php";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } 
$sql = "SELECT id,nombre,apellido,edad,email,user_id FROM users where 1";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
            echo "<tr><th scope=row><td>"
            .$row["id"]."</td><td>"
            .$row["nombre"]."</td><td>"
            .$row["apellido"]."</td><td>"
            .$row["edad"]."</td><td>"
            .$row["email"]."</td><td>"
            .$row["user_id"]."</td></tr>";
        // echo "<tr><td>". $row["nombre"]. " </td><td>". $row["apellido"]. "</td><td> " . $row["edad"] . "</td><td>". $row["email"]. "</td><td>". $row["user_id"]. "</td></tr>";
     }
} else {
     echo "0 results";
}
 
$conn->close();
?>
  </tbody>
</table>










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