<?php
$str_data = file_get_contents("./json/productos.json");
$data = json_decode($str_data, true);
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

                                <form action="catalogo.php" method="GET" class="form-inline navbar-search justify-content-around">
                                    <div class="col-12 col-md-6 col-lg-4 mx-2 form-group">
                                        <select name="continente" class="custom-select custom-select-lg" id="continente">
                                            <option value="">Select continente</option>
                                            <?php foreach ($data as $key => $value) : ?>
                                                <?php if ($key > 7) continue ?>
                                                <option value="<?php echo $data[$key]['id']; ?>"><?php echo $data[$key]['nombre']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mx-2 form-group">
                                        <select name="pais" class="custom-select custom-select-lg" id="pais">
                                            <option value="">Select pais</option>
                                            <option value="0">Todo</option>
                                            <?php foreach ($data as $key => $value) : ?>
                                                <?php if ($key < 7) continue ?>
                                                <option value="<?php echo $data[$key]['id']; ?>"><?php echo $data[$key]['nombre']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-md mx-3 px-4">Buscar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {

        load_json_data('continente');

        function load_json_data(id, parent_id) {
            var html_code = '';
            $.getJSON('./json/productos.json', function(data) {

                html_code += '<option value="">Select ' + id + '</option>';
                html_code += '<option value="0">Todo</option>';
                $.each(data, function(key, value) {
                    if (id == 'continente') {
                        if (key > 0) {
                            if (value.parent_id == '0') {
                                html_code += '<option value="' + value.id + '">' + value.nombre + '</option>';
                            } else if (value.parent_id == '') {
                                html_code += '<option value="' + value.id + '">' + value.nombre + '</option>';
                            }
                        }
                    } else {

                        if (value.parent_id == parent_id && parent_id != 0) {
                            html_code += '<option value="' + value.id + '">' + value.nombre + '</option>';
                        }

                        if (key > 6) {
                            if (parent_id == 0) {
                                html_code += '<option value="' + value.id + '">' + value.nombre + '</option>';
                            }
                        }

                    }
                });
                $('#' + id).html(html_code);
            });

        }

        $(document).on('change', '#continente', function() {
            var continente_id = $(this).val();
            if (continente_id != '') {
                load_json_data('pais', continente_id);
            } else {
                load_json_data('pais', continente_id);
            }
        });

    });
</script>