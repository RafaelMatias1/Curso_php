<?php

    $url = "https://www.google.com";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl);
    echo "<br>";

    $url2 = "https://www.horadecodar.com.br/?busca=php";

    $arrayUrl2 = parse_url($url2);

    print_r($arrayUrl2);

