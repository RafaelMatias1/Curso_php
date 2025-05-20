<?php

    $pessoa = ["rafael", 19, "dev", "castanho"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corOlho) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corOlho <br>";