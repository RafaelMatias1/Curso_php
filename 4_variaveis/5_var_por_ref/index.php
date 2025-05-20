<?php

    $x = 10;

    $y =& $x;

    echo$x;
    echo "<br>";
    echo$y;
    echo "<br>";

    $y = 15;

    echo "atribuicao pos referencia";
    echo "<br>";  
    echo$x;
    echo "<br>";
    echo$y;
    echo "<br>";