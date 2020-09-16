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

$dataDestinos= $db->query('SELECT DISTINCT pa.nombrepais as pais, 
                                           ci.nombreciudad as ciudades,
                                           co.nombrecontinente as nombrecontinente
                                FROM productos pr, ciudades ci, paises pa, continentes co
                                WHERE pr.idciudad = ci.idciudad 
                                AND ci.idpais = pa.idpais
                                AND pa.idcontinente = co.idcontinente 
                                AND co.activo = 1');

// $dataPaises= $db->query('SELECT DISTINCT pa.nombrepais as pais, 
//                                            ci.nombreciudad as ciudades,
//                                            co.nombrecontinente as nombrecontinente
//                                 FROM productos pr, ciudades ci, paises pa, continentes co
//                                 WHERE pr.idciudad = ci.idciudad 
//                                 AND ci.idpais = pa.idpais
//                                 AND pa.idcontinente = co.idcontinente 
//                                 AND co.activo = 1');
$dataPaises= $db->query('SELECT DISTINCT pa.nombrepais as pais, 
ci.nombreciudad as ciudades,
co.nombrecontinente as nombrecontinente,
pa.idcontinente as paidcontinente,
co.idcontinente as idcon
FROM productos pr, ciudades ci, paises pa, continentes co
WHERE pr.idciudad = ci.idciudad 
AND ci.idpais = pa.idpais
AND pa.idcontinente = co.idcontinente 
AND co.activo = 1');

$dataContinentes= $db->query('SELECT nombrecontinente  from continentes');

$dataCiudades= $db->query('SELECT ci.idciudad as ciudades ,pa.idpais as paises, co.nombrecontinente as nombrecontinente from continentes co,paises pa, ciudades ci where 
ci.idpais = pa.idpais AND pa.idcontinente = co.idcontinente');
$todos= $db->query('SELECT * FROM productos');
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
                                    <!-- <?php $opcionContinen = $_GET[$todos] ?> -->
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
                                        <?php $opcionPais = 'Todo'; ?>
                                        <?php !empty($_GET['pais']) ? $opcionPais=$_GET['pais']: $opcionPais= "Todo" ?>
                                         <input type="hidden" name="continente" value="<?php echo isset($opcionContinen) ? $opcionContinen  : $_GET['continente']?>">
                                        <select name="pais" class="custom-select custom-select-lg" id="pais" onchange="this.form.submit()">
                                            <option value="">Seleccionar Pais</option>
                                            <?php foreach ($dataPaises as $paises) : ?>
                                                <?php if ($paises['pais'] == $opcionContinen) : ?>
                                                    <option <?php echo ($opcionPais == $paises['pais']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $paises['pais'];?> </option>
                                                <?php endif ?>
                                                <?php if ($_GET['pais'] == null || $_GET['nombrecontinente'] == 'null') : ?>
                                                    <option <?php echo ($opcionPais == $paises['pais']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $paises['pais'];?> </option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </form>
                                </div>
                                <div  class="col-12 col-md-6 col-lg-4">
                                <form action="" method="GET" class="">
                                <input type="hidden" name="continente" value="<?php echo isset($opcionContinen) ? $opcionContinen  : $_GET['continente']?>">
                                <input type="hidden" name="pais" value="<?php echo isset($opcionPais) ? $opcionPais : $_GET['pais'] ?>">
                                    <?php !empty($_GET['ciudades']) ? $opcionEstado=$_GET['ciudades']: $opcionEstado = "Todo" ?>
                                        <select name="ciudades" class="custom-select custom-select-lg" id="ciudades" onchange="this.form.submit()">
                                            <option value="">Ciudades</option> 
                                            <?php foreach ($dataCiudades as $ciudades) : ?>
                                                <?php if ($ciudades["pais"] == $opcionPais) : ?>
                                                    <option <?php echo ($opcionEstado == $ciudades['ciudades']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $ciudades['ciudades'];?> </option>
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