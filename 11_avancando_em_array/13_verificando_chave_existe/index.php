<?php

    $arr = [

        "nome" => "Rafael",
        "idade" => 19

    ];

    if(array_key_exists("nome", $arr)){

        echo "a chave existe <br>";

    }else{

        echo "a chave nao existe <br>";

    }

    if(array_key_exists("profissao", $arr)){

        echo "a chave existe <br>";

    }else{

        echo "a chave nao existe <br>";

    }

    if(isset($arr["nome"])){

        echo "a chave existe ISSET <br>";

    }else{

        echo "a chave nao existe ISSET<br>";

    }
    
    if(isset($arr["profissao"])){

        echo "a chave existe ISSET <br>";

    }else{

        echo "a chave nao existe ISSET<br>";

    }