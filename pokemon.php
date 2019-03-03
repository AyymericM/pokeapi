<?php

include 'includes/views/head.php';
include 'includes/functions/Request.php';

if (isset($_GET['id'])) {
    $pokeID = $_GET['id'];
    $pokemon = json_decode(request("/pokemon/$pokeID"));
} else {
    header('Location: ../index.php');
}


if ($pokemon) { ?>
    <div class="wrapper">
        <div class="container">
            <div class="content">
                <img src="<?= $pokemon->sprites->front_default ?>" class="thumb"/>
                <div class="name"><?= $pokemon->forms[0]->name ?></div>
            </div>
        </div>
    </div>
<?php
} else {
    header('Refresh: 0');
} ?>
