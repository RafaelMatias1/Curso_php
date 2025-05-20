<?php

    include_once "backend.php";

?>

<h1>Bem vindo</h1>
<p><?=$nome;?> veja as ofertas</p>

<h2> comfira nossos principais produtos: </h2>
<ul>
    <?php foreach ($produtos as $produto): ?>
        <li><?=$produto;?></li>
    <?php endforeach;?>
</ul>