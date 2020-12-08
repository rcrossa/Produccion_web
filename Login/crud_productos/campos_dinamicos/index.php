<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../../comentarios/style1.css">
    <title>Document</title>
</head>
<body>
<form action="index.php">
<input type="text" value=8></input>
</form>
    <?php
     // Connection info. file
     include 'conn.php';	
        
     // Connection variables
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
     

     // Check connection
     if (!$conn) {
                 die("Connection failed: " . mysqli_connect_error());            
             }
             $result = mysqli_query($conn,"CALL cp_din_productos(8)");
             $row = mysqli_fetch_assoc($result); 
           
    ?>
    <div class="">
	<div class="table1" style="width:auto; height:220px; overflow:auto;">
		<table class="table table-bordered tablamostrar1 ">
			<thead class="table-dark">
            <th>ciudades</th>
			<th>campo</th>
            <th>data</th>
			<!-- <th>Actualizar</th>
			<th>Eliminar</th> -->
		</thead>
		<tbody>
			<?php foreach ($result as $producto) {?>
			<tr class="table-info">               
                <td><?php echo $row['ciudades']   ?></td>
                <td><?php echo $row['campo']  ?></td>
                <td><?php echo $row['data'] ?></td>
				<!-- <td><a href="actualizar.php?idproducto=<?php echo $producto->getIdproducto()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_producto.php?idproducto=<?php echo $producto->getIdproducto()?>&accion=e">Eliminar</a>  </td> -->
			</tr>
			<?php }?>
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
</div>
</body>
</html>