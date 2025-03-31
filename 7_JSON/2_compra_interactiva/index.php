<?php

function mostrarLista()
{
    $json = file_get_contents("compra.json");
    $array = json_decode($json, true);
    echo "<table>
    <tr>
    <th>Producto</th>
    <th>Precio</th>
    </tr>";
    foreach ($array as $item) {
        echo "<tr> 
        <td>" . $item["producto"] . "</td>
        <td>" . $item["precio"] . "</td>
        </tr>";
    }
    echo "</table>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de la Compra</title>
</head>

<body>
    <h1>Mi Lista de la Compra</h1>
    <form action="añadir.php" method="post">
        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto" required><br><br>
        <label for="precio">Precio:</label>
        <input type="number" step="any" id="precio" name="precio" required><br><br>
        <input type="submit" value="Añadir Producto">
    </form>
    <h2>Productos en la Compra:</h2>
    <?php mostrarLista(); ?>

</body>

</html>
