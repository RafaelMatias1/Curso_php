<?php

    $arr = [
        "Rafael" => 19,
        "julia" => 17,
        "carlos" => 25,
        "Lucas" => 40
    ];

    asort($arr);

    print_r($arr);
    echo "<br>";

    $arr2 = [
        "Rafael" => 19,
        "julia" => 17,
        "carlos" => 25,
        "Lucas" => 40
    ];

    arsort($arr2);

    print_r($arr2);
    echo "<br>";