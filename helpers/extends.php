<?php
function extend($view){

    $view = './views/templates/'.$view.'.php';

    ob_start();
    require_once $view;

    $content = ob_get_clean();

    return $content;
}