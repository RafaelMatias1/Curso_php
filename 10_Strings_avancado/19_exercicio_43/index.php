<?php

    $str = "carro - navio - helicoptero - barco - jangada";

    $fraseArray = explode("-", $str);

    for($i = 0; $i < count($fraseArray); $i++){

        echo "item: $fraseArray[$i] <br>";

    }