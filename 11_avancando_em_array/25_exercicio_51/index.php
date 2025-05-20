<?php

    $ranking = [
        "Rafael" => 19,
        "Julia" => 17,
        "joao" => 54,
        "Pedro" => 444,
        "Maria" => 239,
        "Joana" => 123,
        "Henrique" => 12
    ];

    arsort($ranking);

?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($ranking as $pessoas => $pontuacao): ?>
        <li> <?= $pessoas ?> -> <?= $pontuacao ?> pontos </li>
    <?php endforeach; ?>
</ol>