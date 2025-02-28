<?php

/* 
    Crear un objeto(array asociativo) que represente una película. 
    Para ello ha de tener lo siguientes campos:
        - titulo
        - año
        - director
        - genero


    Una vez creado un objeto, intentar crear un array con 3 películas, 
    iterarlas para mostrarlas en 3 divs html con sus correspondientes atributos
*/
$peliculas = [
    [
        "titulo" => "Inception",
        "año" => 2010,
        "director" => "Christopher Nolan",
        "genero" => "Ciencia Ficción"
    ],
    [
        "titulo" => "The Godfather",
        "año" => 1972,
        "director" => "Francis Ford Coppola",
        "genero" => "Crimen, Drama"
    ],
    [
        "titulo" => "The Dark Knight",
        "año" => 2008,
        "director" => "Christopher Nolan",
        "genero" => "Acción, Crimen, Drama"
    ],
    [
        "titulo" => "Forrest Gump",
        "año" => 1994,
        "director" => "Robert Zemeckis",
        "genero" => "Drama, Comedia"
    ]
];

foreach ($peliculas as $datos) {
    echo "<div style='border: 2px solid black; padding: 10px; margin: 10px; text-align:center;'>" . 
        "<h1>" . $datos["titulo"] . "</h2>" .
        "Año: " . $datos["año"] . "<br>" .
        "Director: " . $datos["director"] . "<br>" .
        "Género: " . $datos["genero"] . "</div><br>";
}

?>