<?php
spl_autoload_register(function ($class){
    require_once ('../models/'.$class.'.php');
});
$validate =  new Validator;
$announces = new Model;

$email = $validate->post('string');

$err = [];

$row = $announces->get('admins', ['user_name', '=', $email]);

if($row->count() == 0){
    $err['error'] = "This email or number doesn't correspond to a user";
}
echo json_encode($err);



