<div class="container">
  <div class="row justify-content-center pb-4">

    <div class="col-12">
      <div class="row">

        <?php
      //API conversión MySQL a JSON
        require_once ('conexion.php');
        $db=DB::conectar();

        $queryProductos = "SELECT pr.idproducto as id, 
                            ci.nombreciudad as nombre, 
                            pa.nombrepais as pais, 
                            co.nombrecontinente as continente,
                            ci.nombreciudad as estadoprovincia,
                            pr.precio as precio,
                            pr.descripcion as descripcion,
                            pr.detalle as descripcion_details,
                            pr.url as url,
                            pr.destacado as destacado
                            FROM productos pr, ciudades ci, paises pa, continentes co
                            WHERE pr.idciudad = ci.idciudad 
                            AND ci.idpais = pa.idpais
                            AND pa.idcontinente = co.idcontinente 
                            AND pr.activo=1";

        $stmt4 = $db->prepare($queryProductos);
        $stmt4->execute();
        $dataProductos = array();


        while($row=$stmt4->fetch(PDO::FETCH_ASSOC)){
            $dataProductos[] = $row;
        }
        //Fin del código

        $continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
        $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
        $estadosprovincias = (isset($_GET["estadoprovincia"]) ? $_GET['estadoprovincia'] : null)

        ?>
        <?php foreach ( $dataProductos as $key => $value) { ?>
         
          <?php if ($page == 'index' && $value['destacado']) { ?>

            <?php include('card_paises.php'); ?>

          <?php } elseif ($page == 'catalogo') { ?>

            <?php
            $condicionEstado = (($continente == $value['continente'] || $continente == 'Todo') && $pais == $value['pais'] && $estadosprovincias == $value['estadoprovincia']);
            $condicionPais = ($pais == $value['pais'] && empty($estadosprovincias));
            $condicionContinente = (($continente == $value['continente'] || $continente == 'Todo') && empty($pais) && empty($estadosprovincias ));
  
            if ($condicionEstado || $condicionPais || $condicionContinente) {
            ?>
              <?php include('card_paises.php'); ?>

            <?php } ?>
          <?php } ?>
        <?php } ?>

      </div>
    </div>

  </div>
</div>