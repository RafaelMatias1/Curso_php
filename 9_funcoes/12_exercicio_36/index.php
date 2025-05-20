<?php

    $a = [];

    for($i = 0; $i <= 30; $i++){

        array_push($a,$i);

    }

    function maior($arr){

        $retorno = [];

        for($j = 0; $j < count($arr); $j++){

            if($arr[$j] > 7){

                array_push($retorno, $arr[$j]);

            }

        }

        return $retorno;

    }

    $resposta = maior($a);

    print_r($resposta);