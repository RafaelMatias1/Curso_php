<?php

    function defineCorCarro($cor = "vermelha"){

        return "A cor do carro é $cor";

    }

    $vermelho = defineCorCarro();

    echo $vermelho . "<br>";

    $amarelo = defineCorCarro("amarelo");

    echo $amarelo;