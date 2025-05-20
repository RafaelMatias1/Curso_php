<?php

    $a = [10, 20, 30, 40, 50, 60, 80, 90, 100];

    $i = 0;

    while($i < count($a)){

        if($a[$i] == 30 || $a[$i] == 40){

            echo "O Arrey: $a[$i] foi perdido <br>";
            $i++;
            continue;

        }

        echo "Arrey: $a[$i] <br>";

        $i++;
    }