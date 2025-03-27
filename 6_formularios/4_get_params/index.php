<?php
/* 

Crear un programa en php que reciba dos parametros por la URL num1 y num2
en caso de que no se especifiquen, el programa mostrará el texto: "por favor, indique los parámetros correspondientes"
y en caso de que se especifiquen mostrar la suma de ambos números utilizando una función que devuelva: "la suma es: X"


Pista: la función isset($variable), nos permite comprobar si una variable está definida
*/
function sumar($n1,$n2){
    $suma=  $n1+$n2;
    return "El resultado de la suma de los valores $n1 y $n2 es igual a: $suma";
}

if(isset($_GET["num1"]) && isset($_GET["num2"])){
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
    
    if ($n1 == "" || $n2 == "") {
        echo "No se permiten valores vacíos";
    }elseif(!is_numeric($n1)||!is_numeric($n2)){
        echo "No se permiten letras";
    }
    else{
        echo sumar($n1, $n2);
    }
    
}else{
    echo "Por favor, indique los parámetros correspondientes";
}
