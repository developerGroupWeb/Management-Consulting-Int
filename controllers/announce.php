<?php

$ip_addr = $_SERVER['REMOTE_ADDR'];

if(isset($params)){
    // Je dois encore verifier si id correspond a celle de l annonce en ajoutant en une condition && $_GET['id'] === 1254784
    $article_id = $params[0];
    $counter->add_view($ip_addr, $article_id);
}

$id = (isset($params)) ? $params[0] : '';

$announce = $announces->get('announces', ['id', '=', $id]);
$item = current($announce->results());

if ($announce->count() === 0) {
   e404(['message' => 'Product not found !']);
}

