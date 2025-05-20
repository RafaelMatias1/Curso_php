<?php

    class Carro{

        function velocidade_maxima($vel){

            $this->vel = $vel;

        }

    }

    $bmw = new Carro;

    $bmw->velocidade_maxima("300");

    echo "a valocidade maxima da bmw e de $bmw->vel km/h";