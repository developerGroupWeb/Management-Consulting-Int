<?php
session_start();

require_once 'core/autoload.php';

$view = htmlspecialchars($_GET['view']);

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

