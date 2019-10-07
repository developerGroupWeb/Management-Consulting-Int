<?php
$category = (isset($_GET['category'])) ? $_GET['category'] : '';

$all = $announces->get('announces', ['category', '=', $category]);

if($all->count() === 0){
    header('Location:?view=404');
}