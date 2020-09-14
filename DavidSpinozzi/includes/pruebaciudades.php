<select name="ciudad" class="custom-select custom-select-lg" id="third-choice">
    <option>Todo</option>
    <?php foreach ($productos as $producto) {
        foreach ($producto['ciudades'] as $key => $value) { ?>
            <option><?php echo $value; ?></option>
        <?php } ?>
    <?php } ?>
</select>