<?php
require_once ('conexion.php');
$db=DB::conectar();
// $query=$db->query('SELECT nombre from continentes');

// $str_data_continentes = file_get_contents("./json/continentes.json");
// $str_data_continentes= json_encode($userData);
//$str_data_paises = file_get_contents("./json/paises.json");
//$str_data_estadoprovincia = file_get_contents("./json/estadosprovincias.json");

// $dataContinentes = json_decode($str_data_continentes, true);
// $dataPaises = json_decode($str_data_paises, true);
// $dataEstadosProvincias = json_decode($str_data_estadoprovincia, true);
// $select=$db->query('SELECT * FROM productos');

$dataContinentes= $db->query('SELECT DISTINCT co.nombrecontinente as nombrecontinente
                                FROM productos pr, ciudades ci, paises pa, continentes co
                                WHERE pr.idciudad = ci.idciudad 
                                AND ci.idpais = pa.idpais
                                AND pa.idcontinente = co.idcontinente 
                                AND co.activo = 1');

$dataPaises= $db->query('SELECT DISTINCT pa.nombrepais as pais 
                            FROM productos pr, ciudades c, paises pa 
                            WHERE pr.idciudad=c.idciudad 
                            AND c.idpais=pa.idpais 
                            AND pa.activo=1');

//incluye la clase Producto y CrudProducto
require_once ('crud_productos.php');
require_once ('producto.php');
$crud = new CrudProducto();
$producto= new Producto();
$listarProductos=$crud->mostrar();

?>
<div class="container pt-4 px-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="filter-wrap py-4">
                <h3>Filtrar</h3>
                <div class="filter-border p-4 border border-secondary">
                    <div class="filter-inner">
                        <div class="filtrolugar">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <form action="" method="GET" class="">
                                        <?php !empty($_GET['continente']) ? $opcionContinen = $_GET['continente'] : $opcionContinen = "" ?>
                                        <select name="continente" class="custom-select custom-select-lg" id="continente" onchange="this.form.submit()">
                                            <option value="" selected="selected">Seleccionar Continente</option>
                                            <?php foreach ($dataContinentes as $continentes) :  ?>
                                                <option <?php echo ($opcionContinen == $continentes['nombrecontinente']) ? 'selected="selected"' : '' ?>>
                                                    <?php echo $continentes['nombrecontinente'] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-10 col-md-6 col-lg-4">
                                    <form action="" method="GET" class="">
                                        <?php !empty($_GET['pais']) ? $opcionPais=$_GET['pais']: $opcionPais= "Todo" ?>
                                         <input type="hidden" name="continente" value="<?php echo isset($opcionContinen) ? $opcionContinen  : $_GET['continente']?>">
                                        <select name="pais" class="custom-select custom-select-lg" id="pais" onchange="this.form.submit()">
                                            <option value="">Seleccionar Pais</option>
                                            <?php foreach ($dataPaises as $paises) : ?>
                                                <?php if ($paises['nombrecontinente'] == $opcionContinen) : ?>
                                                    <option <?php echo ($opcionPais == $paises['pais']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $paises['pais'];?> </option>
                                                <?php endif ?>
                                                <?php if ($_GET['nombrecontinente'] == null) : ?>
                                                    <<?php echo ($opcionPais == $paises['pais']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $paises['pais'];?> </option>
                                                <?php endif ?> 
                                            <?php endforeach ?>
                                        </select>
                                    </form>
                                </div>
                                <div  class="col-12 col-md-6 col-lg-4">
                                <form action="" method="GET" class="">
                                <?php $opcionEstado = 'Todo'; ?>

                                <input type="hidden" name="continente" value="<?php echo isset($opcionContinen) ? $opcionContinen  : $_GET['continente']?>">
                                <input type="hidden" name="pais" value="<?php echo isset($opcionPais) ? $opcionPais : $_GET['pais'] ?>">
                                   

                                    <?php !empty($_GET['estadoprovincia']) ? $opcionEstado=$_GET['estadoprovincia']: $opcionEstado = "Todo" ?>
                                        <select name="estadoprovincia" class="custom-select custom-select-lg" id="estadoprovincia" onchange="this.form.submit()">
                                            <option value="">Estados / Provincias</option>
                                            <?php foreach ($dataEstadosProvincias as $estadosprovincias) : ?>
                                                <?php if ($estadosprovincias["pais"] == $opcionPais) : ?>
                                                    <option <?php echo ($opcionEstado == $estadosprovincias['estadoprovincia']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $estadosprovincias['estadoprovincia'];?> </option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select> 
                                        </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    // $(document).ready(function() {

    //     load_json_data('continente');

    //     function load_json_data(id, parent_id) {
    //         var html_code = '';
    //         $.getJSON('./json/ciudades.json', function(data) {

    //             html_code += '<option value="">Select ' + id + '</option>';
    //             $.each(data, function(key, value) {
    //                 if (id == 'continente') {
    //                     if (value.continente == '0') {
    //                         html_code += '<option value="' + value.continente + '">' + value.continenteNombre + '</option>';
    //                     } else {
    //                         html_code += '<option value="' + value.continente + '">' + value.continenteNombre + '</option>';
    //                     }
    //                 } else if (id == 'pais') {

    //                     if (value.continente == parent_id ) {
    //                         html_code += '<option value="' + value.pais + '">' + value.paisNombre + '</option>';
    //                     }

    //                 } else {
    //                     if (value.pais == parent_id) {
    //                         html_code += '<option value="' + value.id + '">' + value.nombre + '</option>';
    //                     }
    //                 }
    //             });
    //             $('#' + id).html(html_code);
    //             norepeat();
    //         });

    //     }

    //     $(document).on('change', '#continente', function() {
    //         var continente_id = $(this).val();
    //         if (continente_id != '') {
    //             load_json_data('pais', continente_id);
    //         } else {
    //             load_json_data('pais', continente_id);
    //         }
    //     });

    //     $(document).on('change', '#pais', function() {
    //         var pais_id = $(this).val();
    //         if (pais_id != '') {
    //             load_json_data('ciudad', pais_id);
    //         } else {
    //             load_json_data('ciudad', pais_id);
    //         }
    //     });

    //     function norepeat() {
    //         var seen = {};
    //         $('option').each(function() {
    //             var txt = $(this).text();
    //             if (seen[txt]) {
    //                 $(this).remove();
    //             } else {
    //                 seen[txt] = true;
    //             }
    //         });
    //     }

    // });
</script>