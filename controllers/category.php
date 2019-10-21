<?php
$category = (isset($params)) ? $params[0] : '';

$all = $announces->findBy('announces', ['category', '=', $category], 'ORDER BY created_at DESC');
$categories = $all->results();


if($all->count() === 0){
    e404(['message' => 'Category not found !']);
}