<?php

    class Car {

        public $rodas = 4;
        public $aro = 20;
        public $cor = "vermelha";

        function ligar(){

            echo "vrummm <br>";

        }

    }

    $ferrari = new Car;

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";

    $ferrari->cor = "azul" . "<br>";

    echo $ferrari->cor;

    $ferrari->ligar();