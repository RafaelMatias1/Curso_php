<?php

    $a = [];

    for($i = 10; $i <= 20; $i++){      
        array_push($a, $i);   
    }

        print_r($a);

    for($i = 0; $i < count($a); $i++){

        if($a[$i] % 2 == 1){
    
            echo "Impar: $a[$i] <br>";
    
        }
    
    }