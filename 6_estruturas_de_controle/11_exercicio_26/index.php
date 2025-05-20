<?php   

    $velocidade = 39;

    if($velocidade < 40){

        echo "voce esta na velocidade correta, sua velocidade é:" . $velocidade;

    }else if($velocidade == 40){

        echo "tome cuidado voce pode levar multa, sua velocidade é:" . $velocidade;

    }else{

        echo "voce esta muito rapido levara uma multa, sua velocidade é:" . $velocidade;

    }