<?php

    $str = "tentando encontrar palavra teste, em uma string que tem teste";

    $palavra = strrpos($str, "teste");

    echo "$palavra <br>";
    
    $palavra2 = strpos($str, "teste");

    echo "$palavra2 <br>";

    if(strrpos($str, "Java") === false){

        echo "a palavra java nao foi encontrada <br>";

    }

    $p = substr($str, strpos($str , "teste"), 5);

    echo $p;