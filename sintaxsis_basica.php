<?php //etiqueta de apertura (Obligatoria)

    //echo permite imprimir datos en pantalla || \n representa un salto de linea (solo se ejecuta en la terminal)
    echo "Palabra bien chida <br>";

    $nombre = "nombre";
    $apellido = "apellido";

    //la concatenación se realiza con un punto (.)
    echo $nombre." ".$apellido;

    //las comillas dobles permiten interpretar variables dentro de las cadenas    
    echo "<br> Texto cool $nombre $apellido";

    //Podemos concatenar operaciones a las cadenas        
    echo "<br>Una suma: " . (5 * 4) ."<br>";

    //la etiqueta de cierre únicamente es obligatoria cuando combinamos PHP y HTML

    //Arrglo base
    $personas = [
        "David" => 22,
        "Michi" => 9,
        "Luis"  => 21,
    ];

    //var_dump permite inspeccionar el contenido de las variables con información detallada      
    var_dump($personas);
    echo "<br>";

    //Print_r permite inspeccionar variables de una forma más sobria
    print_r($personas);
    echo "<br>";

    
?> 