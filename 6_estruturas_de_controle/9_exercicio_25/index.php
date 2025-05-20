<?php

    $a = 51;
    $b = "Rafael";

    if(is_int($a)){

        $multi = $a*2;
        
        if($multi > 100){

            echo "esse numero e maior que 100 <br>" . $multi;
        }else{

            echo "esse numero nao e maior que 100";
        }

    }else{

        echo "isso nao e um numero";
    }
    