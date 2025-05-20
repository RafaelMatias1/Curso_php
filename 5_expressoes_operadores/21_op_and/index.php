<?php

    if(5 > 10 && 10 > 5){
        echo "Entro no if 1 <br>";
    }

    if(50 > 10 && 10 > 5){
        echo "Entro no if 2 <br>";
    }

    if(50 > 10 && 10 > 500){
        echo "Entro no if 3 <br>";
    }

    if(50 > 100 && 10 > 500){
        echo "Entro no if 4 <br>";
    }

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if($a > $b && $c == $d){
        echo "Entro no if 5 <br>";
    }
    
    if($b <= $b && $c >= $d){
        echo "Entro no if 6 <br>";
    }

    if($d === $a && $c > $d){
        echo "Entro no if 7 <br>";
    }

    
    if(($b <= $a && $c >= $d)&& $a > $b){
        echo "Entro no if 8 <br>";
    }

    if($b <= $b && $c >= $d && $c === $a){
        echo "Entro no if 9 <br>";
    }