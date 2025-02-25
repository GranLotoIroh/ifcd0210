<?php
$string="Esto es un string";
$int1=10;
$int2=2;
$booleano=true;

/* Parte 1: concatenar la variable string con otro texto */
echo $string, " ,",$int1;
echo"<br>";

/* Parte 2: sumar ambos números */
echo "La suma de los números ",$int1, " y ", $int2, " da un total de: ",$int1+$int2;
echo"<br>";

/* Parte 3: dividir los números     */
echo "La división de los números ",$int1, " y ", $int2, " da un total de: ",$int1/$int2;
echo"<br>";

/* Parte 4: hallar el módulo de los números (el resto de dividir uno entre otro */
echo "El resto de la división entre los números ",$int1, " y ", $int2, " da un total de: ",$int1%$int2;
echo "<br>";

/* Parte 5: ver si uno de los números es mayor o igual que el ot */
if($int1<$int2){
    echo "El primer número, ",$int1, " es más pequeño que el segundo, ",$int2;
}elseif($int1==$int2){
    echo "Ambos números son iguales";
}else{
    echo "El primer número, ",$int1, " es mayor que el segundo, ",$int2;
}
echo "<br>";

/* Parte 6: mostrar la variable booleana */
if($booleano){
    echo"La variable booleana es verdadera";
}else{
    echo"La variable booleana es falsa";
}
echo"<br>";

/* Parte 7: negar la variable booleana */
if(!$booleano){
    echo"La variable booleana es verdadera";
}else{
    echo"La variable booleana es falsa";
}
echo"<br>";
?>