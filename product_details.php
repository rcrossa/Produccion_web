<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./includes/head.php" ?>
    <title>Product Details</title>
</head>

<body>
    <?php
    $page = 'catalogo';
    //API conversión MySQL a JSON
    require_once ('includes/conexion.php');

    $db=DB::conectar();

    require_once "./includes/encabezado.php";

    $id = (isset($_GET["id"]) ? $_GET['id'] : null);

    $queryProductos = "SELECT pr.idproducto as id, 
    ci.nombreciudad as nombre, 
    pa.nombrepais as pais, 
    co.nombrecontinente as continente,
    ci.nombreciudad as ciudades,
    pr.precio as precio,
    pr.descripcion as descripcion,
    pr.detalle as descripcion_details,
    pr.url as url,
    pr.destacado as destacado,
    prdin.label as label, prdin.data as data
    FROM productos pr, ciudades ci, paises pa, continentes co, productos_campo_dinamico prdin
    WHERE pr.idciudad = ci.idciudad 
    AND ci.idpais = pa.idpais
    AND pa.idcontinente = co.idcontinente
    AND pr.idproducto=$id";

    $queryComentarios = "SELECT c.email as email, 
                                c.comentario as comentario, 
                                c.estrellas as estrellas, 
                                c.idproducto as producto_id, 
                                c.fecha as fecha 
                                FROM comentarios c
                                WHERE activo=1
                                AND c.idproducto =$id
                                ORDER BY fecha DESC";

    $queryCamposdinamicos = "SELECT id_producto, label, data,activo FROM productos_campo_dinamico WHERE id_producto=$id"; 
    $queryComentarioscampos = "SELECT label FROM comentarios_campo_dinamic WHERE producto_id=$id";
    $stmt1 = $db->prepare($queryProductos);
    $stmt1->execute();
    $dataProductos = array();

    $stmt2 = $db->prepare($queryComentarios);
    $stmt2->execute();
    $dataComentarios = array();

    $stmt3 = $db->prepare($queryComentarioscampos);
    $stmt3->execute();
    $dataComentarioscampos = array();

    $stmt4 = $db->prepare($queryCamposdinamicos);
    $stmt4->execute();
    $dataProductoscampos = array();

    while($row=$stmt1->fetch(PDO::FETCH_ASSOC)){
        $dataProductos[] = $row;
    }

    while($row=$stmt2->fetch(PDO::FETCH_ASSOC)){
        $dataComentarios[] = $row;
    }
    while($row=$stmt3->fetch(PDO::FETCH_ASSOC)){
        $dataComentarioscampos[] = $row;
    }
    while($row=$stmt4->fetch(PDO::FETCH_ASSOC)){
        $dataProductoscampos[] = $row;
    }
    $client = @$_SERVER['HTTP_CLIENT_IP']; 
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR']; 
    $remote = $_SERVER['REMOTE_ADDR']; 

    if(filter_var($client, FILTER_VALIDATE_IP)) 
    { 
    $ip = $client; 
    } 
    elseif(filter_var($forward, FILTER_VALIDATE_IP)) 
    { 
    $ip = $forward; 
    } 
    else 
    { 
    $ip = $remote; 
    } 
  

    // Si $_POST submit esta setteado, guarda los datos del comentario en comentarios.json
    
    if (isset($_POST['submit'])) {
        try {
            $comentario1 = $_POST['comentario'];
            $estrellas = $_POST['estrellas'];
            $email = $_POST['email'];
            $activo = "0";
            $fecha= date('Y-m-d');
            // $sql = "INSERT INTO comentarios(idproducto, ip, fecha, comentario, estrellas, activo, email)
            // VALUES ('$id','$ip','$fecha','$comentario1','$estrellas','$activo','$email')";
            $sql="call Creacioncomentario('$id','$ip','$fecha','$comentario1','$estrellas','$activo','$email')";
        
            $db->exec($sql);
            echo '<script language="javascript">alert("Se ha registrado el comentario");</script>';

        } catch (\Throwable $th) {
            echo '<script language="javascript">alert("Usted ya ha emitido un comentario para este producto");</script>';            
        }
        }
    ?>
    <div class="container text-center pt-5 pb-4">
        <?php foreach ($dataProductos as $key => $value) {
            if ($key == $id) break;
        }
        echo '<h1>' . $value['nombre'] . '</h1>';
        ?>
    </div>
    <div class="pb-5 text-center">
        <svg width="20%" height="2">
            <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
        </svg>
    </div>
    <section>
        <div class="container shadow justify-content-around p-4">
            <div class="row justify-content-center align-items-center">
                <div class="col-5">
                    <div class="imagen1">
                        <a href="<?php echo $value['url']; ?>" data-fancybox="gallery"
                            data-caption="Caption for single image">
                            <img height="auto" width="100%" src="<?php echo $value['url']; ?>"
                                alt="imagen de <?php echo $value['nombre']; ?>">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 incluye py-2">
                    <h4 class="pl-3">
                        <?php echo $value['nombre']; ?> <br>
                    </h4>
                    <h5 class="pl-3">
                        <?php echo $value['continente']; ?> <br>
                        Precio: <?php echo $value['precio']; ?>
                        </h3>
                        <?php echo '<p class="col-9 pt-4">' . $value['descripcion'] . '</p>' ?>
                </div>
            </div>
        </div>
    </section>
    <section class="descripcion py-5">
        <div class="container py-5 shadow">
            <div class="row justify-content-center align-items-center" id="home">
                <div class="col-10">
                    <h3 class="pb-3">
                        <div class="col-lg-8 incluye py-2">
                            Incluye:
                        </div>
                    </h3>
                </div>
                <div class="col-10">
                    <ul class="descripcion_detalles">
                        <?php echo '<p class="col-9 pt-4">' . $value['descripcion_details'] . '</p>' ?>
                    </ul>
                </div>
                <div class="col-10 pt-3">
                    <h4>Detalles</h4>
                    <table class="table">
                        <tbody>
                            <?php
                            echo '<tr><td>Ciudad: </td><td>' . $value['nombre'] . '</td></tr>';
                            echo '<tr><td>Pais: </td><td>' . $value['pais'] . '</td></tr>';
                            echo '<tr><td>Viaje: </td><td>' . $value['continente'] . '</td></tr>';
                            echo '<tr><td>Precio: </td><td> ' . $value['precio'] . '</td></tr>';
                            //campos dinamicos
                            foreach ($dataProductoscampos as $key => $value) {
                                echo '<tr><td>' . $value['label'] . ': </td><td> ' . $value['data'] . '</td></tr>';
                            }
                           
                            // echo $dataProductos;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-11 col-md-10 col-lg-10 incluye py-2">
                    <div class="container d-flex justify-content-around">
                        <a href="#" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="text-center pb-3">
                <h2>Danos Tu Opinión Del Producto</h2>
            </div>
            <div class="pb-4 text-center">
                <svg width="20%" height="2">
                    <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
                </svg>
            </div>
            <div class="container">
                <form action="#" method="post">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="email">Email *</label>
                                    <input type="email" id="email" name="email" required class="form-control">
                                    <!-- <?php $pila =array();?> -->
                                    <?php   foreach ($dataComentarioscampos as $key => $value) {?>

                                    <label for="" name="label" id="label"><?php echo $value['label']. '<br />'?></label>
                                    <input type="text" id="data" name="pila[]" required class="form-control">
                                    <?php foreach($pila as $key => $values){?>
                                    <?php $query="INSERT INTO comentarios_campos_dinamicos_data NULL, 21, $email,$values[data] , '1' "?>
                                    <?php $db->exec($query);?>
                                    <?php }?>
                                    <?php }?>
                                    <!-- <?php array_push($pila,); ?> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label>Mensaje *</label>
                                    <textarea class="form-control comentario-textarea" name="comentario" required
                                        rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-10">
                                    <div class="form1">
                                        <p class="clasificacion" name="rankeo">
                                            <input id="radio1" type="radio" name="estrellas" value="5">
                                            <label for="radio1">★</label>
                                            <input id="radio2" type="radio" name="estrellas" value="4">
                                            <label for="radio2">★</label>
                                            <input id="radio3" type="radio" name="estrellas" value="3">
                                            <label for="radio3">★</label>
                                            <input id="radio4" type="radio" name="estrellas" value="2">
                                            <label for="radio4">★</label>
                                            <input id="radio5" type="radio" name="estrellas" value="1">
                                            <label for="radio5">★</label>
                                        </p>
                                    </div>
                                </div>

                                <input type="hidden" class="input-xlarge" name="producto_id"
                                    value="<?php echo $_GET['id'] ?>" />

                                <div class="col-sm-6 col-md-2">
                                    <input class="text-white btn btn-md btn-block text-center newsletter-btn"
                                        type="submit" value="Enviar" name="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">

            <div class="text-center pb-3">
                <h2>Opiniones De Los Usuarios</h2>
            </div>

            <div class="pb-4 text-center">
                <svg width="20%" height="2">
                    <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
                </svg>
            </div>
        </div>
    </section>

    <div class="testimonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <?php
                        $cantidad = 0;
                        foreach ($dataComentarios as $comentario) {
                            if ($comentario['producto_id'] == $_GET['id']) {
                                $cantidad++;
                                if ($cantidad == 11) break;
                    ?>
                    <div class="row justify-content-center align-items-center">
                        <div class="border p-4 shadow col-8 single_testmonial">
                            <p> <?php echo $comentario['comentario']; ?> </p>

                            <div class="testmonial_author">
                                <h3><?php echo $comentario['email']; ?> </h3>
                            </div>

                            <h3 class="text-warning">
                                <?php
                                            if ($comentario['estrellas'] == '1') {
                                                echo '★';
                                            } elseif ($comentario['estrellas'] == '2') {
                                                echo '★★';
                                            } elseif ($comentario['estrellas'] == '3') {
                                                echo '★★★';
                                            } elseif ($comentario['estrellas'] == '4') {
                                                echo '★★★★';
                                            } elseif ($comentario['estrellas'] == '5') {
                                                echo '★★★★★';
                                            }
                                            
                                            ?>
                            </h3>
                            <small>
                                <i> <?php echo $comentario['fecha']; ?> </i>
                            </small>
                        </div>
                    </div>
                    <?php
                            }
                        }
                   // }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- <?php foreach($pila as $valor){?> -->
    <?php var_dump($valor);
       ?>
    <!-- <?php }?> -->




    <?php
    require_once "./includes/linkinteresesyherramientas.php";
    require_once "./includes/footer.php";
    ?>
</body>

</html>