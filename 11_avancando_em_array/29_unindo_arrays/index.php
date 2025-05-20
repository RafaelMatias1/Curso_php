<?php

    $arr1 = [1, 2, 3];
    $arr2= [10, 40, 90];
    $arr3=[2.1, 44.5, 43.3];
    $arr4=["asd", "aa", "eee"];

    $arrMarge = array_merge($arr1, $arr2, $arr3, $arr4);

    print_r($arrMarge);
    echo "<br>";