<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>Elija un sabor de nieve:
        <select class="nieve" name="nieve">
            <option value="">Seleccione Uno</option>
            <option value="chocolate">Chocolate</option>
            <option value="sardina">Sardina</option>
            <option value="vainilla">Vainilla</option>
        </select>
    </label>
    <table border="5px">
        <th>
            <tr><td><div class="resultado"></div></td></tr>
        </th>
    </table>
  
    <script>
    
    const selectElement = document.querySelector('.nieve');
    
    selectElement.addEventListener('change', (event) => {
        const resultado = document.querySelector('.resultado');
        resultado.textContent = `Te gusta el sabor ${event.target.value}`;
    });

    <?php
    
    ?>
    </script>
</body>
</html>

