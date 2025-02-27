<?php

/* 
Dado un array con la temperatura media de  cada día de la semana, sacar:
 - la temperatura máxima, 
 - la mínima 
 - y la temperatura media

*/
$temperaturas = [12, 15, 13, 12, 16, 11, 13];

$suma=0;
$maxima=$temperaturas[0];
$minima=$temperaturas[0];

for ($i=0; $i < count($temperaturas); $i++) { 
    $suma+=$temperaturas[$i];

    if($temperaturas[$i]<$minima){
        $minima=$temperaturas[$i];
    }

    if($temperaturas[$i]>$maxima){
        $maxima=$temperaturas[$i];
    }
}

$media=number_format(($suma/count($temperaturas)),2);

echo "La temperatura media es: ". $media ."<br>";
echo "La temperatura máxima es: ". $maxima ."<br>";
echo "La temperatura mínima es: ". $minima ."<br>";
?>