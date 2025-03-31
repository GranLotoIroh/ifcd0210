    <?php

    function mostrarLista()
    {
        //1) Leer contenido de compra.json ->file_get_contents('ruta_al_fichero') 
        //tip: igualar una variable a la función para guardar el texto en dicha variable
        $compra= file_get_contents("compra.json");
        var_dump($compra);
        //2) Convertir el contenido(string) a un array que pueda iterar -> json_decode($texto_del_json, true)
        echo "<br>";
        $array=json_decode($compra, true);
        var_dump($array);
        //3) Iterar el array renderizando (pintando) el html pertinente 
        $contador=0;
        echo "<ul>";
        foreach($array as $item){
            echo "<li>El prodcuto '".$item["producto"]."' cuesta ".$item["precio"]." €</li>";
            $contador+=floatval($item["precio"]);
        }
        echo "</ul>";
        echo "Total precio de la compra: $contador";
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
        
    <body>
        <h1>Lista de la compra</h1>
        <?php mostrarLista()?>
    </body>

    </html>