<div class="container">
  <div class="row justify-content-center pb-4">

    <div class="col-12">
      <div class="row">

        <?php
      //API conversión MySQL a JSON
        require_once ('conexion.php');
        $db=DB::conectar();
       
        $campo="nombre";
        $orden="";
        $ORDERBY = "ORDER BY";

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
                            $ORDERBY $campo $orden";
        


        $stmt4 = $db->prepare($queryProductos);
        $stmt4->execute();
        $dataProductos = array();


        while($row=$stmt4->fetch(PDO::FETCH_ASSOC)){
            $dataProductos[] = $row;
        }
        //Fin del código

        $continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
        $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
        $ciudades = (isset($_GET["ciudades"]) ? $_GET['ciudades'] : null)

        ?>
        <?php foreach ( $dataProductos as $key => $value) { ?>
         
          <?php if ($page == 'index' && $value['destacado']) { ?>

            <?php include('card_paises.php'); ?>

          <?php }?>
          <?php } ?>



          <!-- ---Select catalogo -->
          <?php
          if ($page == 'catalogo') { ?>

            <?php
            // $ordenamiento = (isset($_GET["orden"])? $_GET['orden']: null);
               $campo="nombre";
               $orden=(isset($_GET["orden"])? $_GET['orden']: null);
               $ORDERBY = "ORDER BY";
       
               $queryProductos1 = "SELECT pr.idproducto as id, 
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
                                   $ORDERBY $campo $orden";
               
       
       
               $stmt6 = $db->prepare($queryProductos1);
               $stmt6->execute();
               $dataProductos1 = array();
       
       
               while($row=$stmt6->fetch(PDO::FETCH_ASSOC)){
                   $dataProductos1[] = $row;
               }
               //Fin del código
               //codigo original 
              //  $continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
              //  $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
              //  $ciudades = (isset($_GET["ciudades"]) ? $_GET['ciudades'] : null)
              //--------ATENCION----------------------ATENCION----------ATENCION------------------------
                             //codigo de prueba 
               $continente = (isset($_GET["continente"]) ? $_GET['continente'] : null);
              //  $pais = (isset($_GET["pais"]) ? $_GET['pais'] : null);
              //  $ciudades = (isset($_GET["ciudades"]) ? $_GET['ciudades'] : null)
            ?>
            <?php foreach ( $dataProductos1 as $key => $value) { ?>
          
            <?php
            //filtro original
            // $condicionCiudad = (($continente == $value['continente'] || $continente == 'Todo') && $pais == $value['pais'] && $ciudades == $value['ciudades']);
            // $condicionPais = ($pais == $value['pais'] && empty($ciudades));
            // $condicionContinente = (($continente == $value['continente'] || $continente == 'Todo') && empty($pais) && empty($ciudades ));
 //--------ATENCION----------------------ATENCION----------ATENCION------------------------
            // filtro de prueba
            // $condicionCiudad = (($continente == $value['continente'] || $continente == 'Todo') && $pais == $value['pais'] && $ciudades == $value['ciudades']);
            // $condicionPais = ($pais == $value['pais'] && empty($ciudades));
            $condicionContinente = (($continente == $value['continente'] || $continente == 'Todo') && empty($pais) && empty($ciudades ));
            if ($condicionContinente) {
            ?>
              <?php include('card_paises.php'); ?>

            
          <?php } ?>
        <?php } ?>
        <?php } ?>
      </div>
    </div>

  </div>
</div>