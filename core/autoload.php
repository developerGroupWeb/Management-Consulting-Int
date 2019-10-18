<?php
require 'core/setting/config.php';
spl_autoload_register(function($class_name){

    if(file_exists('./core/'.$class_name.'.php')){
        require_once './core/'.$class_name.'.php';
    }elseif (file_exists('./models/'.$class_name.'.php')){
        require_once './models/'.$class_name.'.php';
    }

});

$validate = new Validator;
$announces = new Model;
$counter = new CounterView;

require 'helpers/url_path.php';
require 'helpers/paginate.php';
require 'helpers/format_date.php';
require 'helpers/message_flash.php';
require 'helpers/time_ago.php';
require 'helpers/extends.php';

//require 'core/Request.php';
//require 'core/Dispatcher.php';



/*spl_autoload_register(function ($class){
    //require 'models/'.$class.'.php';
    require 'core/'.$class.'.php';
});*/




