<?php

    $compras = ["abacate", "feijao", "arroz", "salada", "macarrao"];

    function superMercado($a){

        $str = "Voce comprou isso: ";

        for($i = 0; $i < count($a); $i++){

            if($i + 1 == count($a)){
                $str .= "$a[$i].";
            }else{ 
                $str .= "$a[$i], ";
            }

        }

        return $str;

    }

    echo superMercado($compras);