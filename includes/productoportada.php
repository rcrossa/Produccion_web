<div class="container">
  <div class="row justify-content-center pb-4">

    <div class="col-12">
      <div class="row">

        <?php
        $continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
        $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
        $estadosprovincias = (isset($_GET["estadoprovincia"]) ? $_GET['estadoprovincia'] : null)


        ?>
        <?php foreach ( $productos as $key => $value) { ?>
         
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