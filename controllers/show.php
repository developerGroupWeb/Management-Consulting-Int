<?php
$ip_addr = $_SERVER['REMOTE_ADDR'];

if(isset($_GET['id'])){

    // Je dois encore verifier si id correspond a celle de l annonce en ajoutant en une condition && $_GET['id'] === 1254784
    $article_id = htmlspecialchars($_GET['id']);
    $counter->add_view($ip_addr, $article_id);
}

