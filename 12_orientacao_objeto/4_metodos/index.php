<?php

    class Pessoa{

        function falar(){
            echo "ola eu sou um objeto <br>";
        }

        function somar($x, $y){
            echo $x + $y . "<br>";
        }

    }

    $rafael = new Pessoa;

    $rafael->falar();
    
    $julia = new Pessoa;

    $julia->falar();

    $rafael->somar(2,2);
    $julia->somar(12, 15);