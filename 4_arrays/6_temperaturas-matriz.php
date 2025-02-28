<?php

/* 
    Similar al ejercicio anterior, pero en vez de crear una temperatura por día, en dos: 
    añadir una temperatura aleatoria entre 15-25 grados para la mañana (con la clave "mañana")
    y otra para la tarde entre 5-15 (con la clave "tarde")
    
    De esta manera tendremos un array en el que podríamos acceder a la clave "lunes" 
    y dentro del lunes podría acceder a "mañana" o "tarde" con y así para el resto de días de la semana

    [
        "lunes"=>[
            "mañana"=> 17,
            "tarde" => 8
        ],    
        "martes"=>[ ...],
        ...
    ]

    Una  vez creado: 
    - Probar a mostrar la temperatura del viernes por la tarde.
    - Iterarlo y mostrar el texto "el lunes por la mañana hay 17ºC, y por la tarde 8ºC, el martes por la mañana..."

*/

$semana = ["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];
$periodo=["mañana", "tarde"];
$temp=[];

/* Haciendolo sin array de periodo
 foreach ($semana as $dia) {
    $temp[$dia]=[
        "mañana" => rand(15,25),
        "tarde" => rand(5,15)
    ];
    echo "La temperatura del " . $dia . " por la mañana es ". $temp[$dia]["mañana"] . "ºC y por la tarde " . $temp[$dia]["tarde"] . "ºC<br>";
} */

/* Haciendolo con array de periodo 
foreach ($semana as $dia) {
    $temp[$dia]=[
        $periodo[0]=>rand(15,25),
        $periodo[1]=>rand(5,15)
    ];
    echo "La temperatura del " . $dia . " por la mañana es ". $temp[$dia][$periodo[0]] . "ºC y por la tarde " . $temp[$dia][$periodo[1]] . "ºC<br>";
} */

echo "<table border='1 solid black'>";
echo "<th>". $periodo[0] . "</th>";
echo "<th>" .$periodo[1] . "</th>";
foreach ($semana as $dia) {
    echo "<tr>";
    $temp[$dia]=[
        $periodo[0]=>rand(15,25),
        $periodo[1]=>rand(5,15)
    ];
    echo "<td>". $temp[$dia][$periodo[0]]. "</td>";
    echo "<td>". $temp[$dia][$periodo[1]]. "</td>";
    echo "</tr>";
} 
echo "</table>";
echo "<hr>";
echo "La temperatura del viernes por la tarde es: ". $temp["viernes"]["tarde"]; 
?>