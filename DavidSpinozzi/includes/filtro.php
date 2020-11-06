<?php
//API conversión MySQL a JSON
require_once ('conexion.php');
    $db=DB::conectar();
    
    $queryContinente = "SELECT idcontinente as id, nombrecontinente as nombre FROM continentes WHERE activo=1";
    $queryPais = "SELECT DISTINCT pa.idpais as id, pa.nombrepais as pais, co.nombrecontinente as continente  
    FROM productos pr, ciudades ci, paises pa, continentes co
    WHERE pr.idciudad = ci.idciudad 
    AND ci.idpais = pa.idpais
    AND pa.idcontinente = co.idcontinente 
    AND pa.activo=1";

    $dataCiudad = "SELECT ci.nombreciudad as ciudades, pa.nombrepais as pais, co.nombrecontinente as continente
    FROM productos pr, ciudades ci, paises pa, continentes co
    WHERE pr.idciudad = ci.idciudad 
    AND ci.idpais = pa.idpais
    AND pa.idcontinente = co.idcontinente";

    $stmt = $db->prepare($queryContinente);
    $stmt2 = $db->prepare($queryPais);
    $stmt3 = $db->prepare($dataCiudad);
    $stmt->execute();
    $stmt2->execute();
    $stmt3->execute();

    $dataContinentes = array();
    $dataPaises = array();
    $dataCiudades = array();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
         $dataContinentes[] = $row;
    }

    while($row=$stmt2->fetch(PDO::FETCH_ASSOC)){
        $dataPaises[] = $row;
        }

    while($row=$stmt3->fetch(PDO::FETCH_ASSOC)){
        $dataCiudades[] = $row;
    }

 //Fin de API

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
                                        <?php $opcionContinen = 'Todo'; ?>
                                        <?php !empty($_GET['continente']) ? $opcionContinen = $_GET['continente'] : $opcionContinen = "" ?>
                                        <select name="continente" class="custom-select custom-select-lg" id="continente" onchange="this.form.submit()">
                                            <option value="" selected="selected">Seleccionar Continente</option>
                                            <?php foreach ($dataContinentes as $continentes) : ?>
                                                <option <?php echo ($opcionContinen == $continentes['nombre']) ? 'selected="selected"' : '' ?>>
                                                    <?php echo $continentes['nombre'] ?>
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
                                                <?php if ($paises['continente'] == $opcionContinen) : ?>
                                                    <option <?php echo ($opcionPais == $paises['pais']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $paises['pais'];?> </option>
                                                <?php endif ?>
                                                <?php if ($_GET['continente'] == null || $_GET['continente'] == 'Todo') : ?>
                                                    <option <?php echo ($opcionPais == $paises['pais']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $paises['pais'];?> </option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </form>
                                </div>
                                <div  class="col-12 col-md-6 col-lg-4">
                                <form action="" method="GET" class="">
                                     <?php $opcionCiudad = 'Todo'; ?>
                                     <input type="hidden" name="continente" value="<?php echo isset($opcionContinen) ? $opcionContinen  : $_GET['continente']?>">
                                     <input type="hidden" name="pais" value="<?php echo isset($opcionPais) ? $opcionPais : $_GET['pais'] ?>">
                                        <?php !empty($_GET['ciudades']) ? $opcionCiudad=$_GET['ciudades']: $opcionCiudad = "Todo" ?>
                                        <select name="ciudades" class="custom-select custom-select-lg" id="ciudades" onchange="this.form.submit()">
                                            <option value="">Seleccionar Ciudad</option>
                                            <?php foreach ($dataCiudades as $ciudades) : ?>
                                                <?php if ($ciudades["pais"] == $opcionPais) : ?>
                                                    <option <?php echo ($opcionCiudad == $ciudades['ciudades']) ? 'selected="selected"' : ''?>>
                                                    <?php echo $ciudades['ciudades'];?> </option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select> 
                                    </form>   
                                </div>
                                <div  class="col-12 col-md-6 col-lg-4">
                                <form action="" method="GET" class="">
                                     <?php $order = null; ?>
                                     <input type="hidden" name="continente" value="<?php echo isset($opcionContinen) ? $opcionContinen  : $_GET['continente']?>">
                                     <input type="hidden" name="pais" value="<?php echo isset($opcionPais) ? $opcionPais : $_GET['pais'] ?>">
                                     <input type="hidden" name="ciudades" value="<?php echo isset($opcionCiudad) ? $opcionCiudad : $_GET['ciudades'] ?>">
                                        <?php !empty($_GET['orden']) ? $order=$_GET['orden']: $order = "TODO" ?>
                                        <select name="orden" class="custom-select custom-select-lg" id="orden" onchange="this.form.submit()">
                                        <option value="">Ordenar</option>
                                            <option 
                                             <?php echo ("ORDER BY precio DESC" == $order) ? 'selected="selected"' : ''?>
                                            value="ORDER BY precio ASC">Precio Menor</option>
                                            <option 
                                             <?php echo ("ORDER BY precio ASC" == $order ) ? 'selected="selected"' : ''?>
                                            value="ORDER BY precio DESC">Precio Mayor</option>
                                            <option 
                                             <?php echo ("ORDER BY nombre ASC" == $order) ? 'selected="selected"' : ''?>
                                            value="ORDER BY nombre ASC">Ciudad A-Z</option>
                                            <option 
                                             <?php echo ("ORDER BY nombre DESC" == $order ) ? 'selected="selected"' : ''?>
                                            value="ORDER BY nombre DESC">Ciudad Z-A</option>
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
