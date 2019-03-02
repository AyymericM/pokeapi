<?php

include 'includes/views/head.php';
include 'includes/functions/Request.php';

$pokemons = request('/pokemons');

?>
<body>
    <div class="navbar">
        <a href="/" class="navbar-content">Pokemon List</a>
    </div>
    <div class="wrapper">
        <div class="container">
            <?php
                if ($pokemons) {
                    foreach ($pokemons as $pokemon):
            ?>
                <div class="item">
                    <img class="thumb"/>
                    <div class="name">Hello world</div>
                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aut odit maxime necessitatibus asperiores qui, nesciunt animi</div>
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