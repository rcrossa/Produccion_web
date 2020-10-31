    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once "includes/head.php" ?>
       
        <title>Formulario De Contacto</title>
    </head>

    <body>
        <?php $page = 'contacto'; ?>
        <?php require_once "includes/encabezado.php"; ?>

        <section class="formulario-contacto py-5">
            <div class="container pt-5 pb-3 shadow-sm">

                <div class="text-center pb-3">
                    <h2>Formulario De Contacto</h4>
                </div>

                <div class="pb-3 text-center">
                    <svg width="20%" height="2">
                        <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
                    </svg>
                </div>

                <div class="container">
                    <form action="#" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="py-4">
                        <fieldset>

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 py-2">
                                            <label>Nombre y Apellido *</label>
                                            <input type="text" name="nombre" required class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-2">
                                            <label for="email">Email *</label>
                                            <input type="email" id="email" name="email" required class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-2">
                                            <label>Área de la empresa</label>
                                            <input type="text" name="areadelaempresa" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-2">
                                            <label for="phone">Teléfono</label>
                                            <input type="tel" id="phone" name="phone" placeholder="15-4545-4545" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Mensaje *</label>
                                                <textarea class="form-control" name="comentario" required rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-2 p-2 ml-auto">
                                            <input class="text-white btn btn-md btn-block text-center newsletter-btn" type="submit" value="Enviar" name="submit">
                                        </div>
                                    </div>

                                </div>
                            </div>
                               
                            <?php
                                //Reseteamos variables a 0.
                                $nombre = $email = $areadelaempresa = $phone = $mensaje = $para = $headers = $msjCorreo = NULL;

                                if (isset($_POST['submit'])) {
                                    //Obtenemos valores input formulario
                                    $nombre = $_POST['nombre'];
                                    $email = $_POST['email'];
                                    $areadelaempresa = $_POST['areadelaempresa']; 
                                    $phone = $_POST['phone'];
                                    $mensaje = $_POST['comentario'];
                                    $para = 'roberto.rossa@davinci.edu.ar';

                                    //Creamos cabecera.
                                    $headers = 'From' . " " . $para . "\r\n";
                                    $headers .= "Content-type: text/html; charset=utf-8";

                                    //Componemos cuerpo correo.
                                    $msjCorreo = "Nombre: " . $nombre;
                                    $msjCorreo .= "\r\n";
                                    $msjCorreo .= "Email: " . $email;
                                    $msjCorreo .= "\r\n";
                                    $msjCorreo .= "areadelaempresa: " . $areadelaempresa;
                                    $msjCorreo .= "\r\n";
                                    $msjCorreo .= "phone" . $phone;
                                    $msjCorreo .= "\r\n";
                                    $msjCorreo .= "Mensaje: " . $mensaje;
                                    $msjCorreo .= "\r\n";

                                    if (mail($para, $areadelaempresa, $msjCorreo, $headers)) {
                                        echo "<script language='javascript'>
                                            alert('Mensaje enviado, muchas gracias.');
                                        </script>";
                                    } else {
                                        echo "<script language='javascript'>
                                            alert('fallado');
                                        </script>";
                                    }
                                }
?>
                        </fieldset>
                    </form>
                </div>

            </div>
        </section>
        <section class="py-4">
            <div class="google-maps">
                <div class="container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3406.427909631637!2d-64.23182658431362!3d-31.374762601380407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94329928a3f7afe1%3A0x249417de894bdded!2sDelfos%20Tour!5e0!3m2!1sen!2sar!4v1587933716198!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>

        <?php require_once "includes/linkinteresesyherramientas.php" ?>

        <?php require_once "includes/footer.php"; ?>

    </body>

    </html>