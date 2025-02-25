<?php 
/* 
Crear un fichero que muestre un número aleatorio entre 1 y 100 
y que además diga si es par o impar
Utiliza constantes para el mínimo y máximo
constantes --> define(nombre, valor)
*/
define('MIN', 1);
define('MAX', 100);

$numero_aleatorio = rand(MIN,MAX);

echo($numero_aleatorio);
echo($numero_aleatorio % 2 == 0 ? ' es par' : ' es impar');

?>