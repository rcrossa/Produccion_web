<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Paginación con PHP, Mysql, jQuery, Ajax y Bootstrap </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  </head>
  <body>
  <?php 
   require_once "modal_agregar.php";
   require_once "modal_modificar.php";
   require_once "modal_eliminar.php";

   ?>
    <div class="container-fluid">
	 
		<div class='col-xs-6'>	
			<h3> Listado de Países</h3>
		</div>
		<div class='col-xs-6'>
			<h3 class='text-right'>		
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#dataRegister"><i class='glyphicon glyphicon-plus'></i> Agregar</button>
			</h3>
		</div>	
		
	  <div class="row">
		<div class="col-xs-12">
		<div id="loader" class="text-center"> <img src="loader.gif"></div>
		<div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
		<div class="outer_div"></div><!-- Datos ajax Final -->
		</div>
	  </div>
	</div>	
	<script src="js/app.js"></script>
	<script> $(document).ready(function(){ load(1); });
	</script>
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