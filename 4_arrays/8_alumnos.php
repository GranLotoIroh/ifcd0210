<?php

/**
 * 
 * Dado el siguiente array de alumnos, realizar las siguientes funciones:
 * 
 * - Mostrar nombres: función que recibe el array y "pinta" un html con todos los nombres, notas y curso de los alumnos
 * - Filtrar alumnos: funcion que recibe el array y un curso, y devuelve otro array con todos los alumnos que cumplen el criterio
 * - Mostrar nota media: función que recibe un array de alumnos y devuelve la nota media
 */

$alumnos = [
    ["nombre" => "Juan Pérez", "nota" => 8.5, "curso" => "1º"],
    ["nombre" => "María López", "nota" => 9.2, "curso" => "2º"],
    ["nombre" => "Carlos Sánchez", "nota" => 7.8, "curso" => "1º"],
    ["nombre" => "Ana Torres", "nota" => 8.9, "curso" => "2º"],
    ["nombre" => "Luis Fernández", "nota" => 6.5, "curso" => "1º"],
    ["nombre" => "Sofía Ramírez", "nota" => 9.0, "curso" => "2º"],
    ["nombre" => "Pedro Gómez", "nota" => 7.3, "curso" => "1º"],
    ["nombre" => "Elena Duarte", "nota" => 8.7, "curso" => "2º"]
];


function imprimir(){
    global $alumnos;
    echo "<table border= 1px solid black>";
    echo "<caption>Lista de alumnos</caption>";
    foreach($alumnos as $alumno){
        echo "<tr>";
        echo "<td>".$alumno['nombre']."</td>";
        echo "<td>".$alumno['nota']."</td>";
        echo "<td>".$alumno['curso']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
function filtrado(){

    global $alumnos;
    $alumnos_filtrados = array_values(array_filter($alumnos, fn($al) => $al["curso"] === "1º"));
    echo "<ul>";
    foreach($alumnos_filtrados as $filtrado){
        echo "<li>".$filtrado["nombre"] . " - ". $filtrado["nota"]. " - ". $filtrado["curso"]."</li>";
    }
    echo "</ul>";
}


/* function filtradofe(){
    global $alumnos;
    $filtro = array();
    foreach($alumnos as $alumno){
        if($alumno["curso"] =="1º"){
            $filtro[] = $alumno["nombre"]; 
        }
    }
    foreach($filtro as $nombre){
        echo "<li>".$nombre."</li>";
    }
} */


function mostrarNotaMedia() {
    global $alumnos;
    $totalNotas = 0;
    $totalAlumnos = count($alumnos);
    foreach ($alumnos as $alumno) {
        $totalNotas += $alumno['nota'];
    }
    echo "La nota media de " .$totalAlumnos. " alumnos es ".$totalNotas / $totalAlumnos;
}


/* imprimir();
filtrado();

//filtradofe();
mostrarNotaMedia(); */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8_alumnos</title>
</head>

<body>
    <h1>Alumnos</h1>
    <?php imprimir()?>
    <form action="8_alumnos.php" method="post">
        <label for="curso">Introducir filtro por curso</label>
        <input type="number" name="curso">
        <input type="submit" value="filtrar">
    </form>
    <?php filtrado() ?>

</body>

</html>
