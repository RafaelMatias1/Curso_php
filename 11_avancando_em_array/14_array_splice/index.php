<?php

    $arr = [1, 2, 3, 4, 5, 6];

    $removidos = array_splice($arr, 1, 2);

    print_r($arr);
    echo "arr<br>";

    print_r($removidos);
    echo "<br>";

    $arr2 = [1, 2, 3, 4, 5, 6];

    $removidos2 = array_splice($arr2, 3);

    print_r($arr2);
    echo "arr<br>";

    print_r($removidos2);
    echo "<br>";

    $arr3 = [1, 2, 3, 4, 5, 6];

    $removidos3 = array_splice($arr3, 1, -1);

    print_r($arr3);
    echo "arr<br>";

    print_r($removidos3);
    echo "<br>";
