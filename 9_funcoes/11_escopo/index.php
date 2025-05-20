<?php

    $a = 10;

    function testeEscopo(){

        $a = 5;

        echo "escopo LOCAL de A: $a <br>";

    }

    echo "escopo GLOBAL de A: $a <br>";

    testeEscopo();