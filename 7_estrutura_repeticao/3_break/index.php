<?php

    $x = 0;

    while($x < 10){

        echo "o x e $x <br>";

        if($x === 5){

            echo "termindo o loop <br>";
            break;

        }
        $x++;

    }

    echo "saiu do loop <br>";