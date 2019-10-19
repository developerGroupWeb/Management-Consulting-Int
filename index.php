<?php
session_start();
require_once 'core/includes.php';


new Dispatcher();

/*
//filter_var($_GET['view'], FILTER_SANITIZE_URL);

$url = filter_var(trim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL);

$params = explode('/', $url);

$view = $params[0];
$params = array_slice($params, 1);


print_r($_SERVER['REQUEST_URI']);

die(1);


$views = scandir('views');

if(in_array($view.'.php', $views)){

    $content = "views/".$view.'.php';

}else{
    header("Location:main.php");
}

if((isset($_SESSION['email']) || isset($_SESSION['password'])) && $view !== 'admin')
{
    header("Location:?view=admin");
}

$controllers = scandir('controllers');

if(in_array($view.'.php', $controllers)){

    require_once ('controllers/'.$view.'.php');
}


require_once ('./Views/templates/base.php');
*/
