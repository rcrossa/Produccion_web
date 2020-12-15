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
        <!-- <link rel="stylesheet" href="../crud_usuarios/style1.css"> -->
	<title>Mostrar Usuarios</title>
</head>
<body>
<?php
//incluye la clase Producto y CrudProducto
require_once ('crud_producto.php');
require_once ('producto.php');
require_once ('campos_dinamicos/crud_campo.php');
require_once ('campos_dinamicos/campo.php');
require_once ('crud_continente.php');
require_once ('continente.php');
require_once ('crud_pais.php');
require_once ('pais.php');
require_once ('crud_ciudad.php');
require_once ('ciudad.php');

$crud = new CrudProducto();
$producto= new Producto();
$crud1 = new CrudContinente();
$continente= new Continente();
$crud2 = new CrudPais();
$pais= new Pais();
$crud3 = new CrudCiudad();
$ciudad= new Ciudad();
$crud4 = new CrudCampo();
$campo= new Campo();
//obtiene todos los productos con el método mostrar de la clase crud
$listarProductos=$crud->mostrar();
$listarContinentes=$crud1->mostrar();
$listarPaises=$crud2->mostrar();
$listarCiudades=$crud3->mostrar();
$listarCampos=$crud4->mostrar();
?>

<div class="">
	<div class="table1" style="width:auto; height:220px; overflow:auto;">
		<table class="table table-bordered tablamostrar1 ">
			<thead class="table-dark">
            <th>Id Producto</th>
			<th>Id Ciudad</th>
            <th>Precio</th>
            <th>Descripcion</th>
			<th>Des/Detail</th>
            <th>URL imgen</th>
            <th>Destacado</th>
            <th>Activo</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
			<?php foreach ($listarProductos as $producto) {?>
			<tr class="table-info">               
                <td><?php echo $producto->getIdProducto()   ?></td>
                <td><?php echo $producto->getIdciudad()   ?></td>
                <td><?php echo $producto->getPrecio() ?></td>
                <td><?php echo $producto->getDescripcion()     ?></td>
                <td><?php echo $producto->getDetalle()    ?></td>
                <td><?php echo $producto->getUrl()  ?></td>
                <td><?php echo $producto->getDestacado() ?></td>
                <td><?php echo $producto->getActivo()   ?></td>
				<td><a href="actualizar.php?idproducto=<?php echo $producto->getIdproducto()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_producto.php?idproducto=<?php echo $producto->getIdproducto()?>&accion=e">Eliminar</a>  </td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
</div>
<h2> Campos dinamicos</h2>
<div class="">
	<div class="table1" style="width:auto; height:220px; overflow:auto;">
		<table class="table table-bordered tablamostrar1 ">
			<thead class="table-dark">
            <th>Id</th>
			<th>Id Producto</th>
            <th>Label</th>
            <th>Activo</th>
			<th>Data</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
			<?php foreach ($listarCampos as $campo) {?>
			<tr class="table-info">  
                <td><?php echo $campo->getId()    ?></td>
                <td><?php echo $campo->getId_producto()   ?></td>
                <td><?php echo $campo->getLabel()   ?></td>
                <td><?php echo $campo->getActivo() ?></td>
                <td><?php echo $campo->getData()     ?></td>
				<td><a href="campos_dinamicos/actualizar.php?id=<?php echo $campo->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="campos_dinamicos/administrar_campo.php?id=<?php echo $campo->getId()?>&accion=e">Eliminar</a>  </td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
</div>
<h2> Continentes</h2>
<div class="">
<div class="table1" style="width:auto; height:220px; overflow:auto; margin-top:20px">
    <table class=" table-bordered tablamostrar1 ">
		<thead class="table-dark">
				<th>id</th>
				<th>nombre</th>
				<th>activo</th>
                <th>Actualizar</th>
                <th>Elimnar</th>
		</thead>
		<tbody>
			<?php foreach ($listarContinentes as $continente) {?>
			<tr class="table-info">
                <td><?php echo $continente->getIdcontinente()?></td>
                <td><?php echo $continente->getNombrecontinente() ?></td>
                <td><?php echo $continente->getActivo() ?></td>
				<td><a href="actualizar_continente.php?idcontinente=<?php echo $continente->getIdcontinente()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_continente.php?idcontinente=<?php echo $continente->getIdcontinente()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
</div>


<div class="table-responsive">

<h2> Paises</h2>
		<div class="table1" style="width:auto; height:220px; overflow:auto; margin-top:20px;position:left;">
			<table class="table table-bordered tablamostrar1 ">
				<thead class="table-dark fixed">
					<th>idpais</th>
					<th>pais</th>
					<th>continente</th>
					<th>activo</th>                   
                    <th>Actualizar</th>
                    <th>Elimnar</th>
				</thead>
				<tbody>
                <?php foreach ($listarPaises as $pais) {?>
                    <tr class="table-info">
                        <td><?php echo $pais->getIdpais()?></td>
                        <td><?php echo $pais->getNombrepais() ?></td>
                        <td><?php echo $pais->getIdcontinente() ?></td>
                        <td><?php echo $pais->getActivo() ?></td>
                        <td><a href="actualizar_pais.php?idpais=<?php echo $pais->getIdpais()?>&accion=a">Actualizar</a> </td>
                        <td><a href="administrar_pais.php?idpais=<?php echo $pais->getIdpais()?>&accion=e">Eliminar</a>   </td>
                    </tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>

    <div class="table-responsive">
    
<h2> Ciudades</h2>
        <div class="table1" style="width:auto; height:220px; overflow:auto;  margin-top:20px">
            <table class="table table-bordered tablamostrar1 ">
                <thead class="table-dark">
                        <th>idciudad</th>
                        <th>nombreciudad</th>
                        <th>idpais</th>                                         
                        <th>Actualizar</th>
                        <th>Elimnar</th>
                </thead>
                <tbody>
                    <?php foreach ($listarCiudades as $ciudad) {?>
                    <tr class="table-info">
                        <td><?php echo $ciudad->getIdciudad() ?></td>
                        <td><?php echo $ciudad->getNombreciudad() ?></td>
                        <td><?php echo $ciudad->getIdpais() ?></td>
                        <td><a href="actualizar_ciudad.php?idciudad=<?php echo $ciudad->getIdciudad()?>&accion=a">Actualizar</a> </td>
                        <td><a href="administrar_ciudad.php?idciudad=<?php echo $ciudad->getIdciudad()?>&accion=e">Eliminar</a>   </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        </div>

	
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
