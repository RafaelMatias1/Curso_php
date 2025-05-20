<?php

    function alteraDados ($nome, $idade){

        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = alteraDados("Rafael", 19);

    print_r($dados);

    echo "<br>";

    echo "ola $dados[0], voce tem $dados[1]";