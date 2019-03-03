<?php

include 'includes/views/head.php';
include 'includes/functions/Request.php';

$pokemons = json_decode(request('/pokemon'));

?>
    <div class="wrapper">
        <div class="container homelist">
            <?php
                if ($pokemons) {
                    foreach ($pokemons->results as $pokemon):
            ?>
                <div class="item">
                    <div class="content">
                        <img src="<?= json_decode(request($pokemon->url, true))->sprites->front_default ?>" class="thumb"/>
                        <div class="name"><?= $pokemon->name ?></div>
                    </div>
                    <a href="pokemon.php/?id=<?= json_decode(request($pokemon->url, true))->id ?>" class="btnmore">En savoir plus</a>
                </div>
            <?php  
                    endforeach;
                } else {
                    include_once 'includes/views/networkerror.php';
                }
            ?>
        </div>
    </div>
</body>
</html>