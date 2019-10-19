<?php
$category = (isset($params)) ? $params[0] : '';

$all = $announces->get('announces', ['category', '=', $category]);

if($all->count() === 0){
    e404(['message' => 'Category not found !']);
}