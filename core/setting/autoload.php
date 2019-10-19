<?php

spl_autoload_register(function($class_name){

    if(file_exists('./core/'.$class_name.'.php')){
        require './core/'.$class_name.'.php';
    }elseif (file_exists('./models/'.$class_name.'.php')){
        require './models/'.$class_name.'.php';
    }

});

$validate = new Validator;
$announces = new Model;
$counter = new CounterView;







/*spl_autoload_register(function ($class){
    //require 'models/'.$class.'.php';
    require 'core/'.$class.'.php';
});*/




