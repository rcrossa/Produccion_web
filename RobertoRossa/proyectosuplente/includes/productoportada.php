<div class="container">
  <div class="row justify-content-center pb-4">

    <div class="col-12">
      <div class="row">

        <?php
        $continente = (isset($_GET["nombrecontinente"]) ? $_GET['nombrecontinente'] : null);
        $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
        $estadosprovincias = (isset($_GET["estadoprovincia"]) ? $_GET['estadoprovincia'] : null);
        
        require_once ('conexion.php');
        $db=DB::conectar();
        $productos=$db->query('SELECT  pr.idproducto as nombre,pr.precio as precio,pr.descripcion as descripcion,pr.url as url,
        pa.nombrepais as pais, ci.nombreciudad as ciudades,
                                                   co.nombrecontinente as nombrecontinente,
                                                   co.idcontinente as idcontinente
                                        FROM productos pr, ciudades ci, paises pa, continentes co
                                        WHERE  pr.idciudad = ci.idciudad 
                                        AND ci.idpais = pa.idpais
                                        AND pa.idcontinente = co.idcontinente 
                                        AND co.activo = 1');
        ?>
        <?php foreach ( $productos as $key => $value) { ?>
         
          <?php if ($page == 'index' && $value['destacado']) { ?>

            <?php include('card_paises.php'); ?>

          <?php } elseif ($page == 'catalogo') { ?>

            <?php
            $condicionEstado = (($continente == $value['nombrecontinente'] || $continente == 'Todo') && $pais == $value['pais'] && $estadosprovincias == $value['estadoprovincia']);
            $condicionPais = ($pais == $value['pais'] && empty($estadosprovincias));
            $condicionContinente = (($continente == $value['nombre'] || $continente == 'Todo') && empty($pais) && empty($estadosprovincias ));
  
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