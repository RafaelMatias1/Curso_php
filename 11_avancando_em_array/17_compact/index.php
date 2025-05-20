<?php

    $marca = "BMW";
    $motor = "3.0";
    $tetoSolar = true;
    $porta = 4;

    $carro = compact("marca", "motor", "tetoSolar", "porta");

    print_r($carro);