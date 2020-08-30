<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudProducto{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto producto

		public function insertar($producto){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO productos values(NULL,:continente,:pais,:precio,:descripcion,:descripcion_details,:url,:destacado,:activo)');
			$insert->bindValue('continente',$producto->getContinente());
			$insert->bindValue('pais',   $producto->getPais());
			$insert->bindValue('precio',   $producto->getPrecio());
			$insert->bindValue('descripcion',     $producto->getDescripcion());
			$insert->bindValue('descripcion_details',  $producto->getDescripcion_details());
			$insert->bindValue('url',$producto->getUrl());
			$insert->bindValue('destacado', $producto->getDestacado());
			$insert->bindValue('activo',   $producto->getActivo());
			$insert->execute();
		}
			//metodo para mostrar todos los productos
		public function mostrar(){
			$db=DB::conectar();
			$listarProductos=[];
			$select=$db->query('SELECT * FROM productos');

			foreach ($select->fetchAll() as $producto) {
				$myProducto = new Producto();
				$myProducto->setId($producto['id']);
				$myProducto->setContinente($producto['continente']);
				$myProducto->setPais($producto['pais']);
				$myProducto->setPrecio($producto['precio']);
				$myProducto->setDescripcion($producto['descripcion']);
				$myProducto->setDescripcion_details($producto['descripcion_details']);
				$myProducto->setUrl($producto['url']);
				$myProducto->setDestacado($producto['destacado']);
				$myProducto->setActivo($producto['activo']);
				$listarProductos[]=$myProducto;
				# code...
			}
			return $listarProductos;
		}
		//metodo para eliminar un producto, recibe como parametro el id del producto
		public function eliminar($id){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM productos where ID=:id');
			$eliminar->bindvalue('id',$id);
			$eliminar->execute();
		}

		//metodo para buscar un producto, recibe como parametro el id del producto
		public function obtenerProducto($id){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM productos WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$producto=$select->fetch();
			$myProducto= new Producto();
			$myProducto->setId($producto['id']);
			$myProducto->setContinente($producto['continente']);
			$myProducto->setPais($producto['pais']);
			$myProducto->setPrecio($producto['precio']);
			$myProducto->setDescripcion($producto['descripcion']);
			$myProducto->setDescripcion_details($producto['descripcion_details']);
			$myProducto->setUrl($producto['url']);
			$myProducto->setDestacado($producto['destacado']);
			$myProducto->setActivo($producto['activo']);
			return $myProducto;
		}

		//metodo para actualizar un producto, recibe como parametro el producto
		public function actualizar($producto){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE users set continente=:continente,pais=:pais,description=:description,descripcion_details=:Descripcion_details,url=:url,destacado=:destacado,activo=:activo WHERE ID=:id');
			$actualizar->bindValue('id'  ,$producto->getId());
			$actualizar->bindValue('continente'  ,$producto->getContinente());
			$actualizar->bindValue('pais',$producto->getPais());
			$actualizar->bindValue('description'    ,$producto->getDescripcion());
			$actualizar->bindValue('Descripcion_details'   ,$producto->getDescripcion_details());
			$actualizar->bindValue('url' ,$producto->getUrl());
			$actualizar->bindValue('destacado',$producto->getDestacado());
			$actualizar->bindValue('activo'  ,$producto->getActivo());
			$actualizar->execute();			
		}
	}
?>