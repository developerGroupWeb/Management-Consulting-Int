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

if((isset($_SESSION['email']) or isset($_SESSION['password'])) and $view != 'profile')
{
    header("Location:?view=profile");
}

$controllers = scandir('controllers');
if(in_array($view.'.php', $controllers)){

    require_once ('controllers/'.$view.'.php');
}


include('./Views/templates/base.php');

