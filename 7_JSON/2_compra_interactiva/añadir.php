<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $json = file_get_contents("compra.json");
    $array = json_decode($json, true);
    $nuevoItem = array(
        "producto" => $producto,
        "precio" => $precio
    );
    $array[] = $nuevoItem;
    $nuevoJson = json_encode($array, JSON_PRETTY_PRINT);
    file_put_contents("compra.json", $nuevoJson);
    header("Location: index.php");  
}
?>