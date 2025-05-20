<?php

    class Pessoa{

        function falar(){
            echo "ola pessoal";
        }

    }

    $rafael = new Pessoa();

    $rafael->nome = "rafael";
    
    echo$rafael->nome;

    echo "<br>";

    $rafael->falar();