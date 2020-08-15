<div class="container">
  <div class="row justify-content-center pb-4">

    <div class="col-12">
      <div class="row">

        <?php
        $continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
        $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
        ?>

        <?php foreach ($productos as $key => $value) { ?>
          <?php if ($key < 7) continue; ?>
          <?php if ($page == 'index' && $value['destacado']) { ?>

            <?php include('card_paises.php'); ?>

          <?php } elseif ($page == 'catalogo') { ?>
            <?php
            if (
              ((empty($continente) || $continente == 0) && empty($pais)) || // No se aplica filtro 
              (!empty($continente) && empty($pais) && $continente == $value['parent_id']) || // Se filtra por continente
              (empty($continente) && !empty($pais) && $pais == $value['id']) || // Se filtra por pais
              (!empty($continente) && !empty($pais) && $pais == $value['id'] && $continente == $value['parent_id']) // Se filtra por continente y pais
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