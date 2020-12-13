<?php
//incluir la clase producto y crudproducto


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un producto
		$nombre_archivo= uniqid().'.'.pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
        $tipo_archivo = $_FILES['userfile']['type'];
        $tamano_archivo = $_FILES['userfile']['size'];
        // $destino = _DIR_ . "/img/".$nombre_archivo;
        if (!(($_FILES['userfile']['type'] == "application/msword" ||  strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 500000))) {
        echo 'El tamaño o el  tipo de archivo es incorrecto';    
        }elseif(!move_uploaded_file($_FILES['userfile']['tmp_name'],  $nombre_archivo)){
        // move_uploaded_file se utiliza para mover el archivo a la posición definitiva
            echo 'Ocurrió algún error al subir el fichero. No pudo guardarse.' ;
        }

	
  } catch (Throwable $th) {
	header("refresh:1;url=productos.php"); 
	echo '<a>Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>