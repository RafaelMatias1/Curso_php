<?php

    $str = "estamos testando o metodo strpos, com o strpos podemos encontrar a string";

    $encontrar = strpos($str, "strpos");

    echo "$encontrar <br>";
    
    $encontrar2 = strpos($str, "java");

    echo "$encontrar2 <br>";

    if($encontrar2 === false){

        echo "palavra nao encontrada <br>";

    }