<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost;dbname=produccion_web4','usuariolectura','1234',$pdo_options);
			return self::$conexion;
		}		
	} 
?>