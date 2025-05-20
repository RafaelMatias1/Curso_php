<?php

    $coisas = ["casa", 2 , 3, "televisao", "garrafa", 5, "fio", 3, 7, "carro"];

    $x = count($coisas);

    $y = 0;

    while ($y < $x){

        if(is_string($coisas[$y])){
            echo $coisas[$y] . "<br>";
        }

        $y++;

    }