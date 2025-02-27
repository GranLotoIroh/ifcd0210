<?php
/* Usando el mismo array del ejercicio anterior, iterarlo con un bucle for y hacer un echo del contenido del array
OPCIONAL: Hacer lo mismo con un foreach*/
echo"Recorrer array con for <br>";
$lista_compra=["pan","leche","huevos","azucar"];
for ($i=0; $i < count($lista_compra); $i++) { 
    echo $lista_compra[$i]. "<br>";
}
echo"<hr>";
echo"Recorrer array con foreach <br>";
foreach($lista_compra as $cosa){
    echo "<input type='checkbox'>".$cosa . "<br>";
}
?>