<?php

// Get all message
$base = 'data/messages.json';
$all_messages = file_get_contents($base);
$all_messages = json_decode($all_messages, true);

rsort($all_messages);


// Get all announces

$all_announces =  $announces->findAll('announces');