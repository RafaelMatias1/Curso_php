<?php

    $arr =[
        "cor" => "vermelho",
        "forma" => "retangulo",
        "material" => "aco"
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Rafa";

    $pessoa = [
        "nome" => "Rafael",
        "idade" => 19
    ];

    echo "$nome <br>";

    extract($pessoa);

    echo "$nome <br>";
    echo "$idade <br>";