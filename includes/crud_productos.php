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
				$select=$db->query('SELECT pr.idproducto, c.nombreciudad, pa.nombrepais, pr.precio, pr.descripcion, pr.detalle, pr.url, pr.destacado, pr.activo 
				FROM productos pr, ciudades c, paises pa 
				WHERE pr.idciudad=c.idciudad
				AND c.idpais=pa.idpais');

			foreach ($select->fetchAll() as $producto) {
				$myProducto = new Producto();
				$myProducto->setId($producto['pr.idproducto']);
				$myProducto->setCiudad($producto['c.nombreciudad']);
				$myProducto->setPais($producto['pa.nombrepais']);
				$myProducto->setPrecio($producto['pr.precio']);
				$myProducto->setDescripcion($producto['pr.descripcion']);
				$myProducto->setDetalle($producto['pr.detalle']);
				$myProducto->setUrl($producto['pr.url']);
				$myProducto->setDestacado($producto['pr.destacado']);
				$myProducto->setActivo($producto['pr.activo']);
				$listarProductos[]=$myProducto;
				# code...
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