<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Listados de productos</title>
</head>
<body>
    <form action='administrar_producto.php' method='post'>
        <div class="table-responsive">
            <table class="table tablaingresar ">
                <tbody>
                    <tr>
                        <th class="table-dark" scope="row">Ciudad:</th>
                        <td class="bg-info"><input type="text" name="idciudad"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Precio:</th>
                        <td class="bg-info"><input type="number" name="precio"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Descripcion:</th>
                        <td class="bg-info"><input type="text" name="descripcion"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Des/detail:</th>
                        <td class="bg-info"><input type="text" name="descripcion_details"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">URL Image:</td>
                        <td class="bg-info"><input type="text" name="url"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Destacado:</th>
                        <td class="bg-info"><input type="text" name="destacado"></td>
                    </tr>
                    <tr>
                        <th class="table-dark" scope="row">Activo:</th>
                        <td class="bg-info"><input type="text" name="activo"></td>
                    </tr>
                    <input type="hidden" name="insertar" value='insertar'>
                </tbody>
            </table>
        </div>
        <button class="botoningresar" onclick="window.location.href='productos.php'" type="submit" value='guardar'
            class="btn btn-primary btn-sm">Crear</button></p>
    </form>
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