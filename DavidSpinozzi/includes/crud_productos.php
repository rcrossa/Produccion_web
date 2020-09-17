<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudProducto{
		//constructor de la clase
		public function __construct(){}

		//metodo para mostrar todos los productos
		public function mostrar(){
			$db=DB::conectar();
			$listarProductos=[];
				$select=$db->query('SELECT  pr.idproducto as idproducto, 
											ci.nombreciudad as nombreciudad, 
											pa.nombrepais as pais, 
											co.nombrecontinente as nombrecontinente
											pr.precio as precio, 
											pr.descripcion as descripcion, 
											pr.detalle as detalle, 
											pr.url as url, 
											pr.destacado as destacado, 
											pr.activo as activo 
									FROM productos pr, ciudades ci, paises pa 
									WHERE pr.idciudad=ci.idciudad
									AND ci.idpais=pa.idpais 
									AND pa.idcontinente=co.idcontinente
									AND pr.activo=1');

			foreach ($select->fetchAll() as $producto) {
				$myProducto = new Producto();
				$myProducto->setIdProducto($producto['idproducto']);
				$myProducto->setCiudad($producto['nombreciudad']);
				$myProducto->setPais($producto['pais']);
				$myProducto->setPrecio($producto['precio']);
				$myProducto->setDescripcion($producto['descripcion']);
				$myProducto->setDetalle($producto['detalle']);
				$myProducto->setUrl($producto['url']);
				$myProducto->setDestacado($producto['destacado']);
				$myProducto->setActivo($producto['activo']);
				$listarProductos[]=$myProducto;

			 }
			return $listarProductos;
		}

		//metodo para buscar un producto, recibe como parametro el id del producto
		public function obtenerProducto($id){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM productos WHERE ID=:idproducto');
			$select->bindValue('idproducto',$id);
			$select->execute();
			$producto=$select->fetch();
			$myProducto= new Producto();
			$myProducto->setId($producto['idproducto']);
			$myProducto->setCiudad($producto['idciudad']);
			$myProducto->setPrecio($producto['precio']);
			$myProducto->setDescripcion($producto['descripcion']);
			$myProducto->setDetalle($producto['detalle']);
			$myProducto->setUrl($producto['url']);
			$myProducto->setDestacado($producto['destacado']);
			$myProducto->setActivo($producto['activo']);
			return $myProducto;
		}
	}
?>