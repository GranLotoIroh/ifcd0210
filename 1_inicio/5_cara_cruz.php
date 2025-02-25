<?php
$numero=rand(1,100);
if($numero>50){
    echo"Ha salido: ",$numero;
    echo"<br>";
    echo "El resultado es: ","<span style='color: blue'>Cara</span>";
}else{
    echo"Ha salido: ",$numero;
    echo"<br>";
    echo "El resultado es: ","<span style='color: red'>Cruz</span>";
}
?>