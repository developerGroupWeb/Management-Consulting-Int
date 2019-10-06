<?php
spl_autoload_register(function ($class){
    require_once ('../models/'.$class.'.php');
});
$validate =  new Validator;
$announces = new Announces;

$email = $validate->post('string');

$err = [];

$row = $announces->get('admin', ['admin', '=', $email]);

if($row->count() == 0){
    $err['error'] = "This email or number doesn't correspond to a user";
}
echo json_encode($err);



