<div class="container">
  <div class="row justify-content-center pb-4">

    <div class="col-12">
      <div class="row">

        <?php
      //API conversión MySQL a JSON
        require_once ('conexion.php');
        $db=DB::conectar();
        $order = (isset($_GET["orden"]) ? $_GET['orden'] : null);

        $queryProductos = "SELECT pr.idproducto as id, 
                            ci.nombreciudad as nombre, 
                            pa.nombrepais as pais, 
                            co.nombrecontinente as continente,
                            ci.nombreciudad as ciudades,
                            pr.precio as precio,
                            pr.descripcion as descripcion,
                            pr.detalle as descripcion_details,
                            pr.url as url,
                            pr.destacado as destacado
                            FROM productos pr, ciudades ci, paises pa, continentes co
                            WHERE pr.idciudad = ci.idciudad 
                            AND ci.idpais = pa.idpais
                            AND pa.idcontinente = co.idcontinente 
                            AND pr.activo=1
                            $order AND RAND() LIMIT 9";

        $stmt4 = $db->prepare($queryProductos);
        $stmt4->execute();
        $dataProductos = array();


        while($row=$stmt4->fetch(PDO::FETCH_ASSOC)){
            $dataProductos[] = $row;
        }
        //Fin de la API

        $continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
        $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
        $ciudades = (isset($_GET["ciudades"]) ? $_GET['ciudades'] : null)

        ?>
        <?php foreach ( $dataProductos as $key => $value) { ?>
         
          <?php if ($page == 'index' && $value['destacado']) { ?>

            <?php include('card_paises.php'); ?>

          <?php } elseif ($page == 'catalogo') { ?>

            <?php
            $condicionCiudad = (($continente == $value['continente'] || $continente == 'Todo') && $pais == $value['pais'] && $ciudades == $value['ciudades']);
            $condicionPais = ($pais == $value['pais'] && (empty($ciudades) ||$ciudades== 'Todo'));
            $condicionContinente = (($continente == $value['continente'] || $continente == 'Todo') && (empty($pais)|| $pais == 'Todo') && (empty($ciudades )||$ciudades== 'Todo'));
            $condicionTodo = ($continente == 'Todo' && $pais == 'Todo' && $ciudades == 'Todo');

            if ($condicionCiudad || $condicionPais || $condicionContinente || $condicionTodo) {
            ?>
              <?php include('card_paises.php'); ?>

            <?php } ?>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>
</div>