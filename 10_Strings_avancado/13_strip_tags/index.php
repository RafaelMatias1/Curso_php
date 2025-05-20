<?php

    $textoHtml = "<p>Testando paragrafo.</p><div>uma div</div><p>outro paragrafo</p>";

    echo $textoHtml;

    $salvarTexto = strip_tags($textoHtml);

    echo $salvarTexto;