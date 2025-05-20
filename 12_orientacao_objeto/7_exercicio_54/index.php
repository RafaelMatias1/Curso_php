<?php

    class Pessoa{

        public $nome = "Rafael <br>";
        public $idade = 19 . "<br>";

        function andar($m){

            echo "Ele andou $m metros <br>";

        }

    }

    $rafael = new Pessoa;

    echo $rafael->nome;
    echo $rafael->idade;

    $rafael->andar(20);