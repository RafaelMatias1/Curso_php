<?php

    function teste($a = "teste"){

        echo "o valor de A e: $a <br>";

    }

    teste();
    teste("ASD");

    function testando($b,$a = "x"){

        echo "o valor de A e: $a e de B e: $b <br>";

    }
    testando("1");
    testando("1", "2");