<div class="container">
  <div class="row justify-content-center pb-4">

    <div class="col-12">
      <div class="row">

        <?php
        $continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
        $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
        ?>

        <?php foreach ($productos as $key => $value) { ?>

          <?php if ($page == 'index' && $value['destacado']) { ?>

            <?php include('card_paises.php'); ?>

          <?php } elseif ($page == 'catalogo') { ?>

            <?php
            if (
              ((empty($continente) || $continente == 'Todo') && empty($pais)) || // No se aplica filtro 
              (empty($pais) && $continente == $value['continente']) || // Se filtra por continente
              ((empty($continente) || $continente == 'Todo') && $pais == $value['nombre']) || // Se filtra por paises
              ($pais == $value['nombre'] && $continente == $value['continente']) // Se filtra por continente y pais
            ) {
            ?>

              <?php include('card_paises.php'); ?>

            <?php } ?>
          <?php } ?>
        <?php } ?>

      </div>
    </div>

  </div>
</div>