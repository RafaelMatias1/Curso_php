<?php

    $a = true;

    if(is_bool($a)){
        echo "E um booleano 1 <br>";
    }

    if(is_bool(0)){
        echo "E um booleano 2 <br>";
    }

    if(is_bool(false)){
        echo "E um booleano 3 <br>";
    }

    if(0 == false){
        echo "E considerado falso <br>";
    }

