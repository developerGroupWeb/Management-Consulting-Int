<?php

//$recent = $announces->findAll('announces');
$latest = $announces->latest('announces', 'ORDER BY created_at DESC', 4);

//print_r($latest);

