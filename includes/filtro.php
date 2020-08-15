<?php
$str_data_continentes = file_get_contents("./json/continentes.json");
$str_data_paises = file_get_contents("./json/paises.json");

$dataContinentes = json_decode($str_data_continentes, true);
$dataPaises = json_decode($str_data_paises, true);
?>

<div class="container pt-4 px-5">
    <div class="row justify-content-center">

        <div class="col-12">
            <div class="filter-wrap py-4">
                <h3>Filtro</h3>
                <div class="filter-border p-4 border border-secondary">
                    <div class="filter-inner">
                        <div class="filtrolugar">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 py-2">

                                    <form action="" method="GET" class="">
                                        <?php $opcion = 'Todo'; ?>
                                        <?php !empty($_GET['continente']) ? $opcion = $_GET['continente'] : $opcion = "" ?>

                                        <select name="continente" class="custom-select custom-select-lg" id="continente" onchange="this.form.submit()">
                                            <option value="" selected="selected">Seleccionar Continente</option>
                                            <?php foreach ($dataContinentes as $continentes) : ?>
                                                <option <?php echo ($opcion == $continentes['nombre']) ? 'selected="selected"' : '' ?>>
                                                    <?php echo $continentes['nombre'] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </form>

                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <form action="" method="GET" class="">
                                        <?php !empty($_GET['pais']) ? $opcion=$_GET['pais']: $opcion= "" ?>
                                        <input type="hidden" name="continente" value="<?php echo isset($_GET['continente']) ? $_GET['continente'] : '' ?>">
                                        <select name="pais" class="custom-select custom-select-lg" id="pais" onchange="this.form.submit()">
                                            <option>Seleccionar Pais</option>
                                            <?php foreach ($dataPaises as $paises) : ?>
                                                <?php if ($paises['continente'] == $_GET['continente']) : ?>
                                                    <option <?php echo ($opcion == $paises['nombre']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $paises['nombre'];?> </option>
                                                <?php endif ?>

                                                <?php if ($_GET['continente'] == null || $_GET['continente'] == 'Todo') : ?>
                                                    <option <?php echo ($opcion == $paises['nombre']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $paises['nombre'];?> </option>
                                                <?php endif ?>

                                            <?php endforeach ?>
                                        </select>
                                    </form>
                                </div>
                                <!-- <div class="col-sm-12 col-lg-2 py-2">
                                    <button type="submit" class="btn btn-danger btn-md mx-3 px-4">Buscar</button>
                                </div> -->
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