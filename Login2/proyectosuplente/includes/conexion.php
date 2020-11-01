<?php
	class  Db{
		public static $conexion=NULL;
		public function __construct (){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost;dbname=produccion_web5','root1','1234',$pdo_options);
			return self::$conexion;
        }		
	} 
?>