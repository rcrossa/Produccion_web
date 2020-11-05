<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/style.css "> -->
    <title>Listados de Productos</title>
</head>
<body>
    <form   method='post' action='administrar_producto.php'>
        <div class="table-responsive">
            <table class="table tablaingresar ">
                <tbody>
                    <tr>
                        <th class="table-dark" scope="row">Id Ciudad:</th>
                        <td class="bg-info"><input type="text" name="IdCiudad"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Precio:</th>
                        <td class="bg-info"><input type="number" name="Precio"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Descripcion:</th>
                        <td class="bg-info"><input type="text" name="Descripcion"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Detalle:</th>
                        <td class="bg-info"><input type="text" name="Detalle"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Url:</td>
                        <td class="bg-info"><input type="text" name="Url"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Destacado:</td>
                        <td class="bg-info"><input type="number" name="Destacado"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">activo:</td>
                        <td class="bg-info"><input type="number" name="activo"></td>
                    </tr>
                    <input type="hidden" name="insertar" value='insertar'>
                </tbody>
            </table>
        </div>
        <!-- <input type='submit' value='guardar'>
        <a href="usuarios.php">Volver</a> -->
        <button class="botoningresar" onclick="window.location.href='usuarios.php'" type="submit" value='insertar'
            class="btn btn-primary btn-sm">Crear</button></p>
        <!-- <button href="usuarios.php" type="submit" >volver</button> -->
    </form>
    <!-- <button onclick="window.location.href='usuarios.php'"
                        class="btn btn-primary btn-sm">Volver</button></p>
                        <button onclick="window.location.href='usuarios.php'" class="btn btn btn-outline-light btn-sm" >volver</button> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>