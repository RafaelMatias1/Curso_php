<?php

    $arr = range(10, 45);

    $soma=0;

    for($i=0;$i<count($arr);$i++){

        $soma = $arr[$i] + 6;

        if($soma <= 30){

            echo "$soma <br>";    

        }else{

            echo "essa soma passo dos 30 <br>";

        }
 
    }
