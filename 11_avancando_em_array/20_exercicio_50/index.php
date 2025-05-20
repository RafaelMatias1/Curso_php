<?php

    $pessoa = [
        "Rafael" => 19,
        "julia" => 17,
        "carlos" => 25,
        "Lucas" => 40
    ];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoa as $nome => $idade):?>
        <tr>
            <td><?= $nome;?></td>
            <td><?= $idade;?></td>
        </tr>
    <?php endforeach ?>
</table>