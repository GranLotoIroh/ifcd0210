<?php
/* Crear un programa que emule los controles de un videojuego:
si pulso w, tiene que salir el texto: "adelante"
si pulso a, tiene que salir el texto: "izquierda"
si pulso s, tiene que salir el texto: "abajo"
si pulso d, tiene que salir el texto: "derecha"
*/

$tecla="a";
switch($tecla):
    case "w":
        echo("adelante");
        break;
    case "a":
        echo "izquierda";
        break;
    case "s":
        echo "abajo";
        break;
    case "d":
        echo "derecha";
        break;
    default:
        echo"No válido";
        break;
    endswitch;
?>