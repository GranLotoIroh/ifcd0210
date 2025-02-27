<?php
/* Realizar una agenda :
Guardar en un array asociativo clave/valor el nombre de la persona como clave y su número como valor 
Una vez hecho, mostrar el texto "X tiene el número 12347890"*/
$agenda=[
    "Nombre1"=>"1",
    "Nombre2"=>"2",
    "Nombre3"=>"3",
    "Nombre4"=>"4",
    "Nombre5"=>"5"
];
foreach ($agenda as $key => $value) {
    echo $key . " tiene el número " . $value . "<br>    ";
}
?>