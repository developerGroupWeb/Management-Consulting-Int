<?php

$all_announces = $announces->findAll('announces');


if(isset($params)){

    $detach = explode('=', $params[0]);
    $page = (is_numeric(end($detach))) ? end($detach) : 0 ;
}
