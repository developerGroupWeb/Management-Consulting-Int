<?php
require '../core/setting/Config.php';

spl_autoload_register(function ($class_name){

    if(file_exists('../core/'.$class_name.'.php')){
        require_once '../core/'.$class_name.'.php';
    }elseif (file_exists('../Models/'.$class_name.'.php')){
        require_once '../Models/'.$class_name.'.php';
    }

});

$validate = new Validator;
$announces = new Model;

$email = $validate->post('string');

$err = [];

$row = $announces->get('admins', ['name', '=', $email]);

if($row->count() === 0){
    $err['error'] = "This email or number doesn't correspond to a user";
}
echo json_encode($err);



