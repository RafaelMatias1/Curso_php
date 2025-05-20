<?php

    $animal1 = "leao";
    $animal2 = "zebra";
    $animal3 = "lobo";
    $animal4 = "macaco";

    $animais = compact("animal1", "animal2", "animal3", "animal4");

    foreach($animais as $varios => $value){

        echo "$varios: $value <br>";

    }

    echo "<br>";
    echo "<br>";

    extract($animais);

    foreach($animais as $animais){

        echo "$animal1 <br>";
        echo "$animal2 <br>";
        echo "$animal3 <br>";
        echo "$animal4 <br>";

    }