<?php

    $a = [
        "porta" => 100,
        "casa" => 10000,
        "carro" => 2000,
        "vidro" => 300,
    ];

    function itens($a){

        $arrItens = [];

        foreach($a as $item => $preco){

            if($preco > 1000){

                array_push($arrItens, $item);

            }

        }

        return $arrItens;

    }

    $novoA = itens($a);

    print_r($novoA);