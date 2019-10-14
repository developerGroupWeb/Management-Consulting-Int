<?php
function extend($view){

    $view = './Views/templates/'.$view.'.php';

    ob_start();
    require_once $view;

    $content = ob_get_clean();

    return $content;
}