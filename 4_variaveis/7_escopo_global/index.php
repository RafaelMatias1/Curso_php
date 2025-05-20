<?php

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5>2){

        $teste = "dsa";

        echo "$teste if <br>";

    }

    echo "$teste global 2 <br>";

    function funcao(){
        
        $teste = "ataaa";

        echo "$teste global 2 <br>";

    }

    funcao();

    function funcaoGlobal(){
        
        global $teste;

        echo "$teste global funcao <br>";

    }

    funcaoGlobal();
