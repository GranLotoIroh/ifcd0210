<?php
/* 
    Crear un array $dias con las siguientes claves: "lunes","martes", ..., "sábado", "domingo"

    Iterando ese array, crear otro array asociativo $temperaturas:
        - cuya clave es el día de la semana
        - el valor es un número aleatorio 

    Iterar $temperaturas, mostrando el texto "la temperatura del lunes es X ºC, ..."
    Crear las temperaturas con un rand

    Pista: el método push() puede resultar útil para añadir elementos a un array nuevo
*/
$semana = ["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];
$temps = [];

foreach ($semana as $dia) {
    $temps[$dia] = rand(1, 15);
    echo "La temperatura del ". $dia ." es ".$temps[$dia] . " ºC.<br>";
}

echo "<hr>";
var_dump($temps);   
?>
