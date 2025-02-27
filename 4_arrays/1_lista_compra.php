<?php
/* Crear un array con la lista de la compra, que contenga al menos 4 elementos
Utilizar un var_dump() para ver su contenido 
Modidicar el tercer elemento y volvais a mostrar el array con el var_dump()*/
$lista_compra=["pan","leche","huevos","azucar"];
var_dump($lista_compra);
$lista_compra[2]="modificar";
echo"<br>";
var_dump($lista_compra);
?>